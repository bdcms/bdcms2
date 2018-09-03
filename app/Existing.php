<?php

namespace App;
use DB;
use Session;
use Illuminate\Database\Eloquent\Model;  

class Existing extends Model
{
    //
    public static function check_mer_email($email_id){
         return DB::table('users')->where('user_email','=',$email_id)->count();
    }

    public static function check_user_nid($nid_no){
         return DB::table('users')->where('user_nid','=',$nid_no)->count();
    }

    public static function check_carnumber_check($number){
         return DB::table('cars')->where('car_reg_num','=',$number)->count();
    }

    public static function check_car_chassis_check($chassis_no){
         return DB::table('cars')->where('car_chasis','=',$chassis_no)->count();
    }

    public static function check_engine_no_check($engine_no){
         return DB::table('cars')->where('car_engine_num','=',$engine_no)->count();
    }

    public static function check_insurence_no_check($insurence_no){
         return DB::table('cars')->where('car_insurence','=',$insurence_no)->count();
    }

    public static function check_licence_no_check($licence_no){
         return DB::table('users')->where('user_lisence','=',$licence_no)->count();
    }

    public static function check_login_email($email_id){
        return DB::table('users')->where('user_email','=',$email_id)->count();
    }

    public static function check_sergeant_identity($identity){
        return DB::table('bdc_sergeants')->where('ser_identity','=',$identity)->count();
    }

    public static function check_user_nid_user_nid( $user_nid,$opts){
        if($opts==4){ 
            return DB::table('bdc_zilla_admins')->where('zil_nid','=',$user_nid)->count();
        }elseif($opts==5){ 
            return DB::table('bdc_upazila_admin')->where('uzl_nid','=',$user_nid)->count();
        }elseif($opts==6){ 
            return DB::table('bdc_sergeants')->where('ser_nid','=',$user_nid)->count();
        }
    }

    public static function check_user_email_($user_email,$opts){
        if($opts==4){ 
            return DB::table('bdc_zilla_admins')->where('zil_email','=',$user_email)->count();
        }elseif($opts==5){ 
            return DB::table('bdc_upazila_admin')->where('uzl_email','=',$user_email)->count();
        }elseif($opts==6){ 
            return DB::table('bdc_sergeants')->where('ser_email','=',$user_email)->count();
        }
    }

    public static function check_user_number_($user_number,$opts){
        if($opts==4){ 
            return DB::table('bdc_zilla_admins')->where('zil_mobile','=',$user_number)->count();
        }elseif($opts==5){ 
            return DB::table('bdc_upazila_admin')->where('uzl_mobile','=',$user_number)->count();
        }elseif($opts==6){ 
            return DB::table('bdc_sergeants')->where('ser_mobile','=',$user_number)->count();
        }
    }

    public static function check_metro_name_check($metro){
        return DB::table('bdc_metros')->where('metro_name','=',$metro)->count();
    }

    public static function check_keyword_name_check($keyword_name){
        return DB::table('bdc_keywords')->where('key_name','=',$keyword_name)->count();
    }

    public static function check_car_metro_check($metro){
        return DB::table('bdc_metros')->where('metro_name','=',$metro)->count();
    }
    public static function check_keyword_check($keyword){
        return DB::table('bdc_keywords')->where('key_name','=',$keyword)->count();
    }
    
     
}
 