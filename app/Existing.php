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
    
     
}
