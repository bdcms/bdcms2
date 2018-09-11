<?php

namespace App\Http\Controllers;
use App\Existing;
use App\SelectModel;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use DB;
class FrontController extends Controller
{
	public $user_email = ' ';
	public $car_reg_num = ' ';

    public function home(){
    	$info=array();
    	$cars=SelectModel::selectall_cars_info();
    	// dd($cars);
    	$allmetro=SelectModel::select_all_metro_id();
        $counter = count($allmetro); 
        

        for ($i=0; $i <$counter ; $i++) {  
        	$info[$i]["metro"]		= SelectModel::select_district_byid($allmetro[$i]->metro_id); 
        	$info[$i]["bus"]		= SelectModel::select_district_bus($allmetro[$i]->metro_id,1);  
        	$info[$i]["track"]		= SelectModel::select_district_track($allmetro[$i]->metro_id,2); 
        	$info[$i]["motorcycle"]	= SelectModel::select_district_motorcycle($allmetro[$i]->metro_id,3); 
        	$info[$i]["minibus"]	= SelectModel::select_district_minibus($allmetro[$i]->metro_id,4); 
        	$info[$i]["total"]		= $info[$i]["bus"]+$info[$i]["track"]+$info[$i]["motorcycle"]+$info[$i]["minibus"]; 
        }  


        for ($i=0; $i <$counter ; $i++) {  
        	$case[$i]["metro"]		= SelectModel::select_district_byid($allmetro[$i]->metro_id); 
        	$case[$i]["helmet"]		= SelectModel::select_district_case_bus($allmetro[$i]->metro_id,1);  
        	$case[$i]["licence"]	= SelectModel::select_district_case_track($allmetro[$i]->metro_id,2); 
        	$case[$i]["accedent"]	= SelectModel::select_district_case_motorcycle($allmetro[$i]->metro_id,3); 
        	$case[$i]["missing"]	= SelectModel::select_district_case_minibus($allmetro[$i]->metro_id,4); 
        	$case[$i]["total"]		= $case[$i]["helmet"]+$case[$i]["licence"]+$case[$i]["accedent"]+$case[$i]["missing"]; 
        }

        $notice = SelectModel::select_all_notices();
 

    	return view('index')->with('cars_info',$info)->with('counter',$counter)->with('cases',$case)->with('nitices',$notice);
    }

     

//Collection Ownner Informations:
    public function signup(){ 								//ownerinfo
    	return view('signup');
    } 

    public function appfrom1(Request $request){
    	$metro = SelectModel::car_metro_search(trim($request->district));
    	$this->validate($request,[
		            'name'			=> 'required', 
		            'fname'			=> 'required', 
		            'nid'			=> 'required|numeric', 
		            'contact_no'	=> 'required|numeric',
		            'email'			=> 'required|email|unique:bdc_owners,won_email',
		            'password' 		=> 'required|min:6|confirmed',
					'password_confirmation' => 'required|min:6',  
		            'dateofbirth'	=> 'required',
		            'gender'		=> 'required',
		            'district'		=> 'required'
		        ]);
  
 		session(
 			[
 				'won_name' 		=> $request->name,
 				'won_fname' 	=> $request->fname,
 				'won_nid' 		=> $request->nid,
 				'won_mobile' 	=> $request->contact_no,
 				'won_passport' 	=> $request->passport, 
 				'won_email' 	=> $request->email,
 				'won_password' 	=> $request->password,
 				'won_lisence' 	=> $request->licence,
 				'won_city' 		=> $metro->metro_id,  
 				'won_birthday' 	=> $request->dateofbirth,
 				'won_gender' 	=> $request->gender,
 			]
 		); 
 		$this->user_email = $request->email; 
 		return redirect('carinfo'); 
    }



//collection Car Information:
    public function signup1(){ 
   //  $this->user_email = session('user_email'); 		 				//carinfo
   //  	if( $this->user_email == ' '){							//checking Ownerinfo is filled-up.
   //  		echo 'fuck';
   //  		exit();
			// return redirect('ownerinfo'); 
   //  	}else{
   //  		echo $this->user_email."sdfad";
   //  		exit();
    		return view('signup1'); 
	//	}
    }
	public function appfrom2(Request $request){ 

    	$this->validate($request,[
	            'carname_id'		=> 'required', 
	            'car_wheel'			=> 'required', 
	            'car_chasis'		=> 'required', 
	            'car_metro'			=> 'required',
	            'car_key'			=> 'required',
	            'car_num' 			=> 'required',
				'car_color' 		=> 'required',  
	            'car_insurence'		=> 'required', 
	            'car_engine_num'	=> 'required', 
	            'car_reg_date'		=> 'required|date',
	            'dri_mobile'		=> ['required',
	            							Rule::exists('bdc_drivers')->where(function ($query) {
    											$query->where('dri_role', 3)->where('dri_car_id', NULL);
											}),
										],
	        ]);

    		$district  = trim($request->car_metro);
	    	$digits    = trim($request->car_key);
	    	$number    = trim($request->car_num);
	    	
    		$first     = substr($number, 0, 2);
    		$last      = substr($number, 2, 5);  
    		$car_reg    = $district." ".$digits." ".$first."-".$last; 
    		$metro = SelectModel::car_metro_search("$request->car_metro");

    		 

  			$driver_id = \DB::table('bdc_drivers')->where('dri_mobile',$request->dri_mobile)->where('dri_role',3)->first();  
	  		// $car_reg = $request->car_metro.' '.$request->car_key.' '.$request->car_num;
	 		session(
	 			[
	 				'carname_id' 			=> $request->carname_id,
	 				'car_wheel' 			=> $request->car_wheel,
	 				'car_chasis' 			=> $request->car_chasis,
	 				'car_metro' 			=> $metro->metro_id,
	 				'car_reg_num'			=> $car_reg,
	 				'car_reg_date'			=> $request->car_reg_date,
	 				'car_insurence' 		=> $request->car_insurence,
	 				'car_road_permit_no' 	=> $request->car_road_permit_no,
	 				'car_engine_num' 		=> $request->car_engine_num,
	 				'driver_id'				=> $driver_id->dri_id,
	 				'car_color' 			=> $request->car_color, 
	 			]
	 		);  
	 	$this->car_reg_num = $request->car_reg;
	 	return redirect('cardocument');  
	}




//collection car,ownerprofile and car documment file.
    public function signup2(){
   //  	if($this->car_reg_num == ' '){
			// return redirect('carinfo'); 
   //  	}else{
    		return view('signup2'); 
	//	}
    }
 
	public function appfrom3(Request $request){  
		
    	$this->validate($request,[
		           'image'				=> 'required|mimetypes:image/jpeg,image/png,image/jpg,image/gif,image/svg|max:250', 
		           'document_pdf'		=> 'required|max:2000',
		           'car_pic'			=> 'required|max:2000'
		        ]);

    		if ($request->hasFile('image') && $request->image->isValid() && $request->hasFile('document_pdf') && $request->document_pdf->isValid()) { 

				$profile = $request->file('image');
				$car = $request->file('car_pic');
				$pdf = $request->file('document_pdf');

	        	 $imagePath = $request->image->store('');
	        	 $imagePath = url('Frontend/images/owner/').'/'.$imagePath; 
	        	 session(['user_profile_pic' => $imagePath]);

	        	 $carPath = $request->car_pic->store('');
	        	 $carPath = url('Frontend/images/cars/').'/'.$carPath; 
	        	 session(['car_pic' => $carPath]);

	        	 $pdfPath = $request->document_pdf->store('');
	        	 $pdfPath = url('Frontend/images/document/').'/'.$pdfPath; 
	        	 session(['car_document_pdf' => $pdfPath]);


	        	$profile->move(public_path('Frontend/images/owner/'),$imagePath);
	        	$pdf->move(public_path('Frontend/images/document/'),$pdfPath);
	        	$car->move(public_path('Frontend/images/cars/'),$carPath);

	    	}else{
	    		echo "no file";
	    		 
	    	} 

	     $ownId = \DB::table('bdc_owners')->insertGetId([
	    	'won_name'			=> session('won_name'),
	    	'won_fname'			=> session('won_fname'),
	    	'won_profile_pic'	=> session('user_profile_pic'),
	    	'won_email'			=> session('won_email'),
	    	'won_password'		=> md5(session('won_password')),
	    	'won_mobile'		=> session('won_mobile'),
	    	//'car_id'			=> $carId,
	    	'won_city'			=> session('won_city'),
	    	'won_birthday'		=> session('won_birthday'),
	    	'won_gender'		=> session('won_gender'),
	    	'won_driver_id'		=> session('driver_id'),
	    	'won_passport'		=> session('won_passport'),
	    	'won_lisence'		=> session('won_lisence'),
	    	'won_nid'			=> session('won_nid'),
	    	'won_role'			=> 2, //owner role id
	    	'won_joining_date'	=> date('d-M-y'),
	    	'remember_token'	=> str_random(25)
	    ]);

	    $carId = \DB::table('cars')->insertGetId([
	    	'carname_id'			=> session('carname_id'),
	    	'car_wheel'				=> session('car_wheel'),
	    	'car_chasis'			=> session('car_chasis'),
	    	'car_metro'				=> session('car_metro'),
	    	'car_reg_num'			=> session('car_reg_num'),
	    	'car_reg_date'			=> session('car_reg_date'),
	    	'car_insurence'			=> session('car_insurence'),
	    	'car_road_permit_no'	=> session('car_road_permit_no'),
	    	'car_engine_num'		=> session('car_engine_num'),
	    	'car_pic'				=> session('car_pic'),
	    	'driver_id'				=> session('driver_id'),
	    	'owner_id'				=> $ownId,
	    	'car_document_pdf'		=> session('car_document_pdf'),
	    	'car_color'				=> session('car_color'), 
	    ]);

	   

	    $insurence=[
			'ins_carid'=>session('car_reg_num'),
			'ins_exp_date'=>date('d-M-y')
		];
		$done = DB::table('bdc_insurences')->insert($insurence);

	    $done = \DB::table('bdc_drivers')->where('dri_id',session('driver_id'))->update(['dri_car_id' => $carId,'dri_working_are'=>session('won_city')]);
	    $done = \DB::table('bdc_owners')->where('won_id',$ownId)->update(['won_car_id' => $carId]);
	    $request->session()->flush();
	    if($done){ 
        	return redirect('/')->with('msg','Your application submited successfully. Please wait for approvement.');
    	}
        
	} 





	public function driverSignup(){
		return view('driver_signup');
	}

	public function driSingup(Request $request){
		$this->validate($request,[
            'name'			=> 'required', 
            'fname'			=> 'required', 
            'city'			=> 'required', 
            'nid'			=> 'required|numeric', 
            'contact_no'	=> 'required|numeric',
            'email'			=> 'required|email|unique:bdc_drivers,dri_email',
            'password' 		=> 'required|min:6|confirmed',
			'password_confirmation' => 'required|min:6',  
			'licence'		=> 'required',
            'dateofbirth'	=> 'required',
            'gender'		=> 'required',
            'address'		=> 'required',
            'image'			=> 'mimetypes:image/jpeg,image/png,image/jpg,image/gif,image/svg|max:250', 
            'licence_image'	=> 'mimetypes:image/jpeg,image/png,image/jpg,image/gif,image/svg|max:250' 
        ]);

		if ($request->hasFile('image') && $request->image->isValid()){
			$profile = $request->file('image');
			$imagePath = $request->image->store('');
			$imagePath = url('public/Frontend/images/driver/').'/'.$imagePath; 
			$user_profile_pic = $imagePath;  
	        // $profile->move(public_path('Frontend/images/driver/'),$imagePath);
	        $profile->move(public_path('Frontend/images/driver/'),$imagePath);   
		}else{
			$user_profile_pic = url('Frontend/images/driver/default_driver.png'); 
		}	

		if ($request->hasFile('licence_image') && $request->licence_image->isValid()){
			$profile = $request->file('licence_image');
			$imagePath = $request->licence_image->store('');
			$imagePath = url('public/Frontend/images/driver/').'/'.$imagePath; 
			$user_doc_pic = $imagePath;  
	        // $profile->move(public_path('Frontend/images/driver/'),$imagePath);
	        $profile->move(public_path('Frontend/images/driver/'),$imagePath); 

		}else{
			$errors['licence_image']="Invalid File format"; 
		} 
		$city = SelectModel::car_metro_search($request->city);
		$done=[
			'dri_name'			=> $request->name,
	    	'dri_fname'			=> $request->fname,
	    	'dri_profile_pic'	=> $user_profile_pic,
	    	'dri_document'		=> $user_doc_pic,
	    	'dri_email'			=> $request->email, 
	    	'dri_password'		=> md5($request->password), 
	    	'dri_mobile'		=> $request->contact_no,  
	    	'dri_address'		=> $request->address, 
	    	'dri_working_are'	=> $city->metro_id, 
	    	'dri_birthday'		=> $request->dateofbirth, 
	    	'dri_gender'		=> $request->gender,  
	    	'dri_passport'		=> $request->passport, 
	    	'dri_lisence'		=> $request->licence, 
	    	'dri_nid'			=> $request->nid,  
	    	'dri_joining_date'	=> date('d-M-y'),  
	    	'remember_token'	=> str_random(25)
		];


		$done = DB::table('bdc_drivers')->insert($done);

		if($done){ 
			//messageing system
			// \Nexmo::message()->send([
			//     'to'   => '8801969516500',
			//     'from' => 'Nexmo',
			//     'text' => 'Dear '.$request->name.', your registration is completed. Now you can wait for your owner added to you. Thank you'
			// ]);
        	return redirect('/')->with('msg','Your application submited successfully. Please wait for approvement.');
    	}
       
	}


    public function login(){ 
    	return view('login');
    }

    

    public function checkLogin(Request $request){
    	$this->validate($request,[
            'email'			=> 'required|email', 
            'password'		=> 'required',  
        ]);
        //$check = \DB::table('')
    }











//All of Ajax REQUEST METHOD

    public function check_user_login(){
    	$email_id = $_GET['email'];
		$result = Existing::check_login_email($email_id);
		if($result!=0){
			echo '1'; //already exists
		}else{
			echo '0';
		}
    }

	public function check_mer_email(){
		$email_id = $_GET['email_id'];
		$result = Existing::check_mer_email($email_id);
		if($result!=0){
			echo '1'; //already exists
		}else{
			echo '0';
		}
	}
	public function check_nid_no(){
		$nid_no = $_GET['nid_no'];
		$result = Existing::check_user_nid($nid_no);
		if($result!=0){
			echo '1'; //already exists
		}else{
			echo '0';
		}
	}

	public function check_car_umber(){
		$car_metro 	= $_GET['car_metro'];
		$keyword 	= $_GET['keyword'];
		$car_number = $_GET['car_number']; 
		$first     = substr($car_number, 0, 2);
    	$last      = substr($car_number, 2, 5);  
        $number    = $car_metro." ".$keyword." ".$first."-".$last;  
		$result = Existing::check_carnumber_check( $number);
		if($result!=0){
			echo '1'; //already exists
		}else{
			echo '0';
		}
	} 
	 

	public function check_chassis_no(){
		$chassis_no 	= $_GET['chassis_no'];
		$result = Existing::check_car_chassis_check( $chassis_no);
		if($result!=0){
			echo '1'; //already exists
		}else{
			echo '0';
		}
	}

	public function check_engine_no(){
		$engine_no 	= $_GET['engine_no'];
		$result = Existing::check_engine_no_check( $engine_no);
		if($result!=0){
			echo '1'; //already exists
		}else{
			echo '0';
		}
	}

	public function check_insurence_no(){
		$insurence_no 	= $_GET['insurence_no'];
		$result = Existing::check_insurence_no_check( $insurence_no);
		if($result!=0){
			echo '1'; //already exists
		}else{
			echo '0';
		}
	}

	public function check_licence_no(){
		$licence_no 	= $_GET['licence_no'];
		$result = Existing::check_licence_no_check( $licence_no);
		if($result!=0){
			echo '1'; //already exists
		}else{
			echo '0';
		}
	}


    public function district(Request $request){ 

    	$district = \DB::table('bdc_metros')
                ->where('metro_name', 'like', $request->area.'%')
                ->distinct()
                ->get();

        $result = '';
		$result .= '<div class = "dist"><ul>';
		if(!empty($district)){
			foreach ($district->unique('metro_name') as $data) {
				$result.='<li>'.$data->metro_name.'</li>';
			}
		}else{
			$result .= '<li>Result Not Found</li>';
		}
		echo $result;
    }

    public function keyword(Request $request){

    	$district = \DB::table('bdc_keywords')
                ->where('key_name', 'like', $request->keyword.'%')
                ->distinct()
                ->get();

        $result = '';
		$result .= '<div class = "key">';
		if(!empty($district)){
			foreach ($district->unique('key_name') as $data) {
				$result.='<span>'.$data->key_name.'</span>';
			}
		}else{
			$result .= '<span>Result Not Found</span>';
		}
		echo $result;
    }


}

