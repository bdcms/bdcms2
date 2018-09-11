<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB; 
use Session;
use Redirect;
use App\SergeantModel;
use App\SelectModel;
class SergeantController extends Controller
{
    //
    public function index(){
    	$statement = view('sergeant/index'); 
    	return view('master.front_user_layout')->with('sergeant/index',$statement);
    }
    public function sergeant_setting($id){
    	$data=SergeantModel::select_sergeant_information($id); 
    	$city=SelectModel::select_district_byid($data->ser_working_area);
    	$city= $city->metro_name; 
    	$statement = view('sergeant/setting')->with('sergeant_info',$data)->with('city',$city); 
    	return view('master.front_user_layout')->with('sergeant/setting',$statement);
    }



    public function sergeant_info_update(Request $request){
    	$id=$request->id;
    	$image=$request->image;

    	$this->validate($request,[
            'name'			=> 'required',  
            'email'			=> 'email|required', 
            'number'		=> 'required',  
            'address'		=> 'required',  
            'city'			=> 'required',  
            'file'			=> 'mimes:jpeg,png,jpg,gif,svg' 
        ]); 
 	 
 		$email_check=SelectModel::sergeant_email_id_check($id); 
		if($email_check->ser_email==$request->email){
		}else{  
			 $this->validate($request,[ 
            'email'			=> 'unique:bdc_sergeants,ser_email' 
        ]); 
		} 
		if($email_check->ser_mobile==$request->number){
		}else{  
			 $this->validate($request,[ 
            'number'		=> 'unique:bdc_sergeants,ser_mobile' 
        ]);  
		} 
			if ($request->hasFile('file')&& $request->file->isValid()){ 
	            $profile = $request->file('file');
	            $imagePath = $request->file->store('');
	            $imagePath = url('public/Frontend/images/sergeant/').'/'.$imagePath; 
	            $profile->move(public_path('Frontend/images/sergeant/'),$imagePath); 
	            // unlink($image);
	        }else{
	            $errors['file']="Invalid File format"; 
	        }
	       $city_id=SelectModel::car_metro_search($request->city);
	        if(!empty($imagePath)){
	            $user_doc_pic 			= $imagePath; 
	        }else{$user_doc_pic			=$image;} 
	    	$data['ser_name']			=$request->name; 
	    	$data['ser_email']			=$request->email;
	    	$data['ser_mobile']			=$request->number;
	    	$data['ser_profile_pic']	=$user_doc_pic;
	    	$data['ser_address']		=$request->address;
	    	$data['ser_working_area'] 	=$city_id->metro_id;
	    	$result = SergeantModel::update_sergeant_info($data,$id);
	        return Redirect("/sergeant-setting/$id")->with('msg', 'Profile Update Successfully!'); 
    }








}
