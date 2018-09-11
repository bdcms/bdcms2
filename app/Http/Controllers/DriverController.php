<?php

namespace App\Http\Controllers;
use DB; 
use Session;
use Redirect;
use App\DriverModel;
use App\SelectModel;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    //
    public function index(){
    	$statement = view('driver/index'); 
    	return view('master.front_user_layout')->with('driver/index',$statement);
    }
    public function driver_setting($id){
    	$data=DriverModel::select_driver_information($id);
    	$city=SelectModel::select_district_byid($data->dri_working_are);
    	$city= $city->metro_name;
    	if(isset($data->dri_car_id)){ 
    		$cars=SelectModel::Single_car_select_info_byID($data->dri_car_id);
    		$car=$cars->car_reg_num;
    	}
    	// dd($other);
    	$statement = view('driver/setting')->with('driver_info',$data)->with('city',$city)->with('car',$car); 
    	return view('master.front_user_layout')->with('driver/setting',$statement);
    }

    public function driver_info_update(Request $request){
    	$id=$request->id;
    	$image=$request->image;

    	$this->validate($request,[
            'name'			=> 'required', 
            'fname'			=> 'required', 
            'email'			=> 'email|required', 
            'number'		=> 'required',  
            'address'		=> 'required',  
            'file'			=> 'mimes:jpeg,png,jpg,gif,svg' 
        ]); 
 		
 		$email_check=SelectModel::driver_email_id_check($id); 
		if($email_check->dri_email==$request->email){
		}else{  
			 $this->validate($request,[ 
            'email'			=> 'unique:bdc_drivers,dri_email' 
        ]); 
		}

		if($email_check->dri_mobile==$request->number){
		}else{  
			 $this->validate($request,[ 
            'number'			=> 'unique:bdc_drivers,dri_mobile' 
        ]);


		} 
			if ($request->hasFile('file')&& $request->file->isValid()){ 
	            $profile = $request->file('file');
	            $imagePath = $request->file->store('');
	            $imagePath = url('public/Frontend/images/driver/').'/'.$imagePath; 
	            $profile->move(public_path('Frontend/images/driver/'),$imagePath); 
	            // unlink($image);
	        }else{
	            $errors['file']="Invalid File format"; 
	        }

	        if(!empty($imagePath)){
	            $user_doc_pic = $imagePath; 
	        }else{$user_doc_pic=$image;} 
	    	$data['dri_name']		=$request->name;
	    	$data['dri_fname']		=$request->fname;
	    	$data['dri_email']		=$request->email;
	    	$data['dri_mobile']		=$request->number;
	    	$data['dri_profile_pic']=$user_doc_pic;
	    	$data['dri_address']	=$request->address;
	    	$result = DriverModel::update_driver_info($data,$id);
	        return Redirect("/driver-setting/$id")->with('msg', 'Profile Update Successfully!'); 
    }
}//Class Close


 
