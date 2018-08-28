<?php
namespace App;
use DB;
use Session;

use Illuminate\Database\Eloquent\Model;

class LoginModel extends Model
{
    //
    public static function Login_data_check($email,$password,$user_role){
    	if($user_role==1){

    	}elseif($user_role==2){
    		return DB::table('tbl_owners')->where('own_email',$email)->where('own_password',$password)->first();
    	}
    	elseif($user_role==3){

    	}
    	elseif($user_role==4){

    	}
    	elseif($user_role==5){

    	}
    	elseif($user_role==6){

    	}
    	elseif($user_role==7){

    	}
    }


    
    public static function check_login_email($email_id,$password,$user_role){

        switch ($user_role) { 
                case "1": //
                    return DB::table('users')           ->where('user_email','=',$email_id)->where('user_password','=',$password)->count(); 
                case "2": //Woner  switch 
                    return DB::table('bdc_owners')      ->where('won_email','=',$email_id)->where('won_password','=',$password)->count(); 
                case "3": //Driver switch 
                    return DB::table('bdc_drivers')     ->where('dri_email','=',$email_id)->where('dri_password','=',$password)->count(); 
                case "4": //Zilla switch
                    return DB::table('bdc_zilla_admins')->where('zil_email','=',$email_id)->where('zil_password','=',$password)->count();   
                case "5": //Upazila Switch 
                    return DB::table('bdc_upazila_admin')->where('uzl_email','=',$email_id)->where('uzl_password','=',$password)->count();
                case "6": //Sergeants switch
                    return DB::table('bdc_sergeants')   ->where('ser_email','=',$email_id)->where('ser_password','=',$password)->count();
                 
            }  
    }

    




}
