<?php

namespace App\Http\Controllers;
use App\Existing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use DB;
class FrontController extends Controller
{
	public $user_email = ' ';
	public $car_reg_num = ' ';

    public function home(){
    	return view('index');
    }

     

//Collection Ownner Informations:
    public function signup(){ 								//ownerinfo
    	return view('signup');
    } 

    public function appfrom1(Request $request){
    	$this->validate($request,[
		            'name'			=> 'required', 
		            'fname'			=> 'required', 
		            'nid'			=> 'required|numeric', 
		            'contact_no'	=> 'required|numeric',
		            'email'			=> 'required|email|unique:users,user_email',
		            'password' 		=> 'required|min:6|confirmed',
					'password_confirmation' => 'required|min:6',  
		            'dateofbirth'	=> 'required',
		            'gender'		=> 'required',
		            'address'		=> 'required'
		        ]);
  
 		session(
 			[
 				'user_name' 		=> $request->name,
 				'user_fname' 		=> $request->fname,
 				'user_nid' 			=> $request->nid,
 				'user_mobile' 		=> $request->contact_no,
 				'user_passport' 	=> $request->passport, 
 				'user_email' 		=> $request->email,
 				'user_password' 	=> $request->password,
 				'user_lincence' 	=> $request->licence,
 				'user_address' 		=> $request->address,  
 				'user_birth_date' 	=> $request->dateofbirth,
 				'user_gender' 		=> $request->gender,
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
	            'user_mobile'		=> ['required',
	            							Rule::exists('users')->where(function ($query) {
    											$query->where('role_id', 3)->where('car_id', NULL);
											}),
										],
	        ]);

  			$driver_id = \DB::table('users')->where('user_mobile',$request->user_mobile)->where('role_id',3)->first();  
	  		$car_reg = $request->car_metro.' '.$request->car_key.' '.$request->car_num;
	 		session(
	 			[
	 				'carname_id' 			=> $request->carname_id,
	 				'car_wheel' 			=> $request->car_wheel,
	 				'car_chasis' 			=> $request->car_chasis,
	 				'car_metro' 			=> $request->car_metro,
	 				'car_reg_num'			=> $car_reg,
	 				'car_reg_date'			=> $request->car_reg_date,
	 				'car_insurence' 		=> $request->car_insurence,
	 				'car_road_permit_no' 	=> $request->car_road_permit_no,
	 				'car_engine_num' 		=> $request->car_engine_num,
	 				'driver_id'				=> $driver_id->id,
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
	    		exit();
	    	} 

	     $ownId = \DB::table('users')->insertGetId([
	    	'user_name'			=> session('user_name'),
	    	'user_fname'		=> session('user_fname'),
	    	'user_profile_pic'	=> session('user_profile_pic'),
	    	'user_email'		=> session('user_email'),
	    	'user_password'		=> md5(session('user_password')),
	    	'user_mobile'		=> session('user_mobile'),
	    	//'car_id'			=> $carId,
	    	'user_address'		=> session('user_address'),
	    	'user_birthday'		=> session('user_birth_date'),
	    	'user_gender'		=> session('user_gender'),
	    	'driver_id'			=> session('driver_id'),
	    	'user_passport'		=> session('user_passport'),
	    	'user_lisence'		=> session('user_lincence'),
	    	'user_nid'			=> session('user_nid'),
	    	'role_id'			=> 2, //owner role id
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

	   


	    $done = \DB::table('users')->where('id',session('driver_id'))->update(['car_id' => $carId]);
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
        ]);

		if ($request->hasFile('image') && $request->image->isValid()){
			$profile = $request->file('image');
			$imagePath = $request->image->store('');
			$imagePath = url('Frontend/images/driver/').'/'.$imagePath; 
			$user_profile_pic = $imagePath;  
	        $profile->move(public_path('Frontend/images/driver/'),$imagePath);  
		}else{
			$user_profile_pic = url('Frontend/images/driver/default_driver.png'); 
		}	 
		$done( 
			// 'dri_name'			= $request->name,
	  //   	'dri_fname'			= $request->fname,
	  //   	'dri_profile_pic'	= $user_profile_pic,
	  //   	'dri_email'			= $request->email, 
	  //   	'dri_password'		= md5($request->password), 
	  //   	'dri_mobile'		= $request->contact_no,  
	  //   	'dri_address'		= $request->address, 
	  //   	'dri_birthday'		= $request->dateofbirth, 
	  //   	'dri_gender'		= $request->gender,  
	  //   	'dri_passport'		= $request->passport, 
	  //   	'dri_lisence'		= $request->licence, 
	  //   	'dri_nid'			= $request->nid,  
	  //   	'dri_joining_date'	= date('M,d,Y'),  
	  //   	'remember_token'	= str_random(25)
		);
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

    	$district = \DB::table('tbl_car_reg')
                ->where('district', 'like', $request->area.'%')
                ->distinct()
                ->get();

        $result = '';
		$result .= '<div class = "dist"><ul>';
		if(!empty($district)){
			foreach ($district->unique('district') as $data) {
				$result.='<li>'.$data->district.'</li>';
			}
		}else{
			$result .= '<li>Result Not Found</li>';
		}
		echo $result;
    }

    public function keyword(Request $request){

    	$district = \DB::table('tbl_car_reg')
                ->where('keyword', 'like', $request->keyword.'%')
                ->distinct()
                ->get();

        $result = '';
		$result .= '<div class = "key">';
		if(!empty($district)){
			foreach ($district->unique('keyword') as $data) {
				$result.='<span>'.$data->keyword.'</span>';
			}
		}else{
			$result .= '<span>Result Not Found</span>';
		}
		echo $result;
    }


}

