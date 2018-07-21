<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProfileRequest;
use DB; 
use Session;
use Redirect;
class ProfileController extends Controller
{
    //
    public function New_Profile(){
    	return view('admin/open_Profile');
    }

    public function Opening_NewProfile(ProfileRequest $request){ 
    	$data = array();
    	$data['user_name']		=$request->user_name;
    	$data['user_name']		=$request->user_name;
    	$data['user_email']		=$request->user_email;
    	$data['user_mobile']	=$request->user_mobile;
    	$data['user_address']	=$request->user_address;
    	$data['role_id']		=$request->role_id;
    	$data['user_posting']	=$request->user_posting;  
    	$data['user_fname']		=$request->user_fname;   
    	$data['user_gender']	=$request->user_gender;  
    	$data['user_password']	=md5(str_random(6));    
    	$action = DB::table('users')->insert($data); 
    	$this->_flash_Message($action,'New Profile Open Successfully.','New Profile Open  Faild.');
		return Redirect("/bdcmsadmin");
    }


    public function Staff_List(){
    	$data = DB::table('users') 
    			->where('role_id',4)
    			->orwhere('role_id',5)
    			->orderBy('id', 'DESC')
    			->get();  
    	$statement = view('admin/staff_list')
    		->with('staff_info',$data); 
    	return view('master.admin_layout')
    		->with('admin/staff_list',$statement); 
    }

    public function Staff_Single($id){
    	$data = DB::table('users')  
    			->where('id',$id) 
    			->First();  
    	$statement = view('admin/staff_single')
    		->with('staff_info',$data); 
    	return view('master.admin_layout')
    		->with('admin/staff_single',$statement); 
    }

    public function Staff_Delete($id){
    	$data = DB::table('users')->where('id',$id)->first();
    	//unlink($data->user_profile_pic);
    	$action = DB::table('users')
    		->where('id',$id)
    		->delete();
    		$this->_flash_Message($action,'User Profile Delete Successfully.','User Profile Delete Faild.');
    		return Redirect('/Staff_List');
    }

    public function Driver_List(){
        $data = DB::table('users') 
                ->where('role_id',3) 
                ->where('pub_status',1)
                ->orderBy('id', 'DESC')
                ->get();  
        $statement = view('admin/user_list')
            ->with('user_info',$data); 
        return view('master.admin_layout')
            ->with('admin/user_list',$statement);
    }

    public function Owner_List(){
        $data = DB::table('users') 
                ->where('role_id',2) 
                ->where('pub_status',1)
                ->where('car_id','!=',NULL)
                ->orderBy('id', 'DESC')
                ->get();  
        $statement = view('admin/user_list')
            ->with('owner_info',$data); 
        return view('master.admin_layout')
            ->with('admin/user_list',$statement);
    }

 
















    private function _flash_Message($action, $message, $faield){
        if($action){
            Session::put('message', $message);
            Session::put('class','alert alert-success');
        }else{
            Session::put('message', $faield);
            Session::put('class','alert alert-error');
        } 
    }
}//Class Exit
