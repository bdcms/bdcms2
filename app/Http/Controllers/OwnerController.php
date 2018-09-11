<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB; 
use Session;
use Form;
use Redirect;
use App\OwnderModel;
use App\SelectModel;
 
class OwnerController extends Controller
{
    //
    public function index(){
    	$statement = view('owner/index'); 
    	return view('master.front_user_layout')->with('owner/index',$statement);
    }


    public function owner_setting($id){
    	$data=OwnderModel::select_owner_information($id);

    	$city=SelectModel::select_district_byid($data->won_city);
    	$city= $city->metro_name;
    	// if(isset($data->dri_car_id)){ 
    	// 	$cars=SelectModel::Single_car_select_info_byID($data->dri_car_id);
    	// 	$car=$cars->car_reg_num;
    	// }
    	// dd($other);
    	$statement = view('owner/setting')->with('owner_info',$data)->with('city',$city); 
    	return view('master.front_user_layout')->with('owner/setting',$statement);
    }

    public function owner_info_update(Request $request){
    	$id=$request->id;
    	$image=$request->image;

    	$this->validate($request,[
            'name'			=> 'required', 
            'fname'			=> 'required', 
            'email'			=> 'email|required', 
            'number'		=> 'required',  
            'address'		=> 'required',  
            'city'		    => 'required',  
            'file'			=> 'mimes:jpeg,png,jpg,gif,svg' 
        ]); 
 	 
 		$email_check=SelectModel::owner_email_id_check($id); 
		if($email_check->won_email==$request->email){
		}else{  
			 $this->validate($request,[ 
            'email'			=> 'unique:bdc_owners,won_email' 
        ]); 
		} 
		if($email_check->won_mobile==$request->number){
		}else{  
			 $this->validate($request,[ 
            'number'		=> 'unique:bdc_owners,won_mobile' 
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
	       $city_id=SelectModel::car_metro_search($request->city);
	        if(!empty($imagePath)){
	            $user_doc_pic = $imagePath; 
	        }else{$user_doc_pic=$image;} 
	    	$data['won_name']		=$request->name;
	    	$data['won_fname']		=$request->fname;
	    	$data['won_email']		=$request->email;
	    	$data['won_mobile']		=$request->number;
	    	$data['won_profile_pic']=$user_doc_pic;
	    	$data['won_address']	=$request->address;
	    	$data['won_city']		=$city_id->metro_id;
	    	$result = OwnderModel::update_owner_info($data,$id);
	        return Redirect("/owner-setting/$id")->with('msg', 'Profile Update Successfully!'); 
    }
}
