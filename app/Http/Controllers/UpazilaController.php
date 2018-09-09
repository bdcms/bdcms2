<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB; 
use Session;
use App\ProfileModel;
use App\SelectModel;
use App\Existing; 
use App\mymodel;
use Redirect;
class UpazilaController extends Controller
{
    //
    public function index(){
    	return view('upazila/index');  
    }

    public function upazila_setting($id){
    	$data=SelectModel::select_upazila_admin_info($id); 
    	$city=SelectModel::select_district_byid($data->uzl_working_area); 
    	$statement = view('upazila.setting')
    		->with('allinfo',$data)->with('city',$city);  
    	return view('master.admin_layout')
    		->with('admin.Approved_car_list',$statement); 
    }

    public function upazila_setting_update(Request $request){
         $id=$request->id;
    	 $image=$request->image;

    	 $this->validate($request,[
            'name'			=> 'required', 
            'email'			=> 'required', 
            'number'		=> 'required|numeric', 
            'city'			=> 'required|exists:bdc_metros,metro_name',
            'file'			=> 'mimes:jpeg,png,jpg,gif,svg' 
        ]); 
 
        if ($request->hasFile('file')&& $request->file->isValid()){
            $profile = $request->file('file');
            $imagePath = $request->file->store('');
            $imagePath = url('public/Frontend/images/users/').'/'.$imagePath; 
            $profile->move(public_path('Frontend/images/users/'),$imagePath); 
            // unlink($image);
        }else{
            $errors['file']="Invalid File format"; 
        }

        if(!empty($imagePath)){
            $user_doc_pic = $imagePath; 
        }else{$user_doc_pic=$image;} 

        $city = SelectModel::car_metro_search($request->city); 
        $data = array();
        $data['uzl_name']       = $request->name; 
        $data['uzl_email']      = $request->email;
        $data['uzl_mobile']     = $request->number; 
        $data['uzl_working_area']    = $city->metro_id; 
        $data['uzl_address']= $request->address; 
        $data['uzl_picture']= $user_doc_pic;   
        $result = ProfileModel::update_upazila_info($data,$id);
        return Redirect("/upazila_setting/$id")->with('msg', 'Profile update Successfully!');  
    	
		 
    }


















    
}
