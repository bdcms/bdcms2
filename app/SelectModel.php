<?php

namespace App;
use DB;
use Session;
use Illuminate\Database\Eloquent\Model;

class SelectModel extends Model
{
    //
    public static function select_user_login_data($email,$password,$user_role){  
        switch ($user_role) { 
            case "1": //
                return DB::table('users')           ->where('user_email','=',$email)->where('user_password','=',$password)->first(); 
            case "2": //Woner  switch 
                return DB::table('bdc_owners')      ->where('won_email','=',$email)->where('won_password','=',$password)->first(); 
            case "3": //Driver switch 
                return DB::table('bdc_drivers')     ->where('dri_email','=',$email)->where('dri_password','=',$password)->first(); 
            case "4": //Zilla switch
                return DB::table('bdc_zilla_admins')->where('zil_email','=',$email)->where('zil_password','=',$password)->first();   
            case "5": //Upazila Switch 
                return DB::table('bdc_upazila_admin')->where('uzl_email','=',$email)->where('uzl_password','=',$password)->first();
            case "6": //Sergeants switch
                return DB::table('bdc_sergeants')   ->where('ser_email','=',$email)->where('ser_password','=',$password)->first();
        } 
    	
    }
}
