<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use DB;
use Session;
use input;
use validator;
use view;
use Redirect;   
session_start();
class LoginController extends Controller
{
    public function User_Login(LoginRequest $request){  
    	$email = $request->email;
		$password = md5($request->password);  
		$result = DB::table('users')
			->where('user_email', $email)
			->where('user_password', $password)
			->first(); 
			if ($result) { 
				$check_login=Session::get('alredy_login'); //Use for backup of case submit with out User login
				Session::put('user_id', $result->id);
				Session::put('user_posting', $result->user_posting);
				Session::put('user_name', $result->user_name);
				Session::put('user_email', $result->user_email); 
				Session::put('role_id', $result->role_id); 
				Session::put('user_profile_pic', $result->user_profile_pic); 
				$this->_flash_Message($result,'User Login Successfully.','User Login Faild.');
				if($check_login==1){//Use for backup of case submit with out User login
					Session::put('alredy_login', NUll);
					return Redirect::to('/Search_Fount');
				}else{ 
					//Role Wize Redirection
					if(Session::get('role_id')==1){ 
						return Redirect::to('/bdcmsadmin');
					}elseif(Session::get('role_id')==2){
						$this->_flash_Message($result,'Welcome to Owner Profile.','Email or Password invalid.');
						return Redirect::to('/bdcmsadmin'); 
					}elseif(Session::get('role_id')==3){
						$this->_flash_Message($result,'Welcome to Driver profile.','Email or Password invalid.');
						return Redirect::to('/bdcmsadmin'); 
					}
					elseif(Session::get('role_id')==4){
						$this->_flash_Message($result,'Welcome to upazila admin panel.','Email or Password invalid.');
						return Redirect::to('/bdcmsadmin'); 
					}
				}
			}else{
				$this->_flash_Message($result=null,'Email or Password invalid.','Email or Password invalid.'); 
				return Redirect::to("/login");
			}
    }

    public function User_Logout(){
    	Session::put('alredy_login', NUll);
    	Session::get('car_Reg_Number',NULL);
    	Session::get('user_posting',NULL);
    	Session::put('user_id', NUll);
		Session::put('user_name', NUll);
		Session::put('user_email',NUll); 
		Session::put('role_id', NUll); 
		Session::put('user_profile_pic', NUll);
		return Redirect::to("/login");
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


}
