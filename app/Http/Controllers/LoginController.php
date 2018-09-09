<?php

namespace App\Http\Controllers;

use App\Existing;
use App\LoginModel;
use App\SelectModel;
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
public function check_user_login(){
    	$email_id = $_GET['email'];
    	$password = md5($_GET['password']);
    	$user_role = $_GET['user_role']; 
		$result = LoginModel::check_login_email($email_id,$password,$user_role); 
		if($result!=0){
			echo '1'; //already exists
		}else{
			echo '0';
		}
    }
     

    public function User_Login(LoginRequest $request){  

    	$email 		= $request->email;
		$password 	= md5($request->password);  
		$user_role 	= $request->user_role;  
		$exists 	= LoginModel::check_login_email($email,$password,$user_role);  
		if ($exists) { 
			$result=SelectModel::select_user_login_data($email,$password,$user_role); 
			$check_login=Session::get('alredy_login'); //Use for backup of case submit with out User login 
			 

			// if($check_login==1 && Session::get('role_id')==6){//Use for backup of case submit with out User login
			// 	Session::put('alredy_login', NUll);
			// 	return Redirect::to('/Search_Car');
			// }else{ //Role Wize Redirection
				switch ($user_role) {
					case '1':  
						Session::put('user_id', $result->user_id); 
						Session::put('user_name', $result->user_name);
						Session::put('user_email', $result->user_email); 
						Session::put('role_id', $user_role);   
						Session::put('user_posting', $result->user_address);   
						return Redirect::to('/bdcmsadmin');
					case '2': 
						Session::put('user_id', $result->won_id); 
						Session::put('user_name', $result->won_name);
						Session::put('user_email', $result->won_email); 
						Session::put('user_pic', $result->won_profile_pic);  
						Session::put('role_id', $user_role); 
						return Redirect::to('/')->with('msg','Login Successfully!.');
					case '3': 
						Session::put('user_id', $result->dri_id); 
						Session::put('user_name', $result->dri_name);
						Session::put('user_email', $result->dri_email);
						Session::put('user_pic', $result->dri_profile_pic);  
						Session::put('role_id', $user_role); 
						return Redirect::to('/')->with('msg','Login Successfully!.');
					case '4': 
						Session::put('user_id', $result->zil_id); 
						Session::put('user_name', $result->zil_name);
						Session::put('user_email', $result->zil_email);
						Session::put('user_pic', $result->zil_picture);  
						Session::put('user_posting', $result->zil_working_area);  
						Session::put('role_id', $user_role); 
						return Redirect::to('/subadmin')->with('msg','Login Successfully!.'); 
					case '5': 
						Session::put('user_id', $result->uzl_id); 
						Session::put('user_name', $result->uzl_name);
						Session::put('user_email', $result->uzl_email);
						Session::put('user_pic', $result->uzl_picture); 
						Session::put('user_posting', $result->uzl_working_area);  
						Session::put('role_id', $user_role); 
						return Redirect::to('/third_admin')->with('msg','Login Successfully!.');
					case '6': 
						Session::put('user_id', $result->ser_id); 
						Session::put('user_name', $result->ser_name);
						Session::put('user_email', $result->ser_email);
						Session::put('user_pic', $result->ser_profile_pic);  
						Session::put('role_id', $user_role);
						// echo "Sergean profile";exit;
						$car_Reg_Number=Session::get('car_Reg_Number'); 
						if($car_Reg_Number){
								Session::put('car_Reg_Number',NULL);
								return Redirect::to("/Search_out/$car_Reg_Number")->with('msg','Login Successfully!.');
							}
							else{ 
								return Redirect::to('/')->with('msg','Login Successfully!.');
							}
				}
				 
			// }
		}else{
			$this->_flash_Message($result=null,'Email or Password invalid.','Email or Password invalid.'); 
			return Redirect::to("/login");
		}
    }

    public function User_Logout(){
    	$role=Session::get('role_id');
    	Session::put('alredy_login', NUll);
    	Session::put('car_Reg_Number',NULL);
    	Session::put('user_posting',NULL);
    	Session::put('user_id', NUll);
		Session::put('user_name', NUll);
		Session::put('user_email',NUll); 
		Session::put('role_id', NUll); 
		Session::put('user_profile_pic', NUll);
		
		if($role==2 OR $role==3 OR $role==6){ 
			return Redirect::to("/")->with('msg','Thank you for using BDCM.');
			}elseif($role==4 OR $role==5){ 
				return Redirect::to("/user_login")->with('msg','Thank you for using BDCM.');
			}elseif($role==1){ 
				return Redirect::to("/admin")->with('msg','Thank you for using BDCM.');
			}
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
