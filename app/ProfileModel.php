<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class ProfileModel extends Model
{
    //

    static public function new_user_role_insert($data,$table){ 
    	 	return DB::table("$table")->insert($data); 
    }

    static public function select_users_role_profile(){
    	return DB::table('bdc_users')->where('pub_status',1)->get();
    }

    static public function select_zilausers_role_profile(){
    	return DB::table('bdc_zilla_admins')->where('pub_status',1)->get();
    }
    static public function select_upazila_role_profile(){
    	return DB::table('bdc_upazila_admin')->where('pub_status',1)->get();
    }
    static public function select_sergents_role_profile(){
    	return DB::table('bdc_sergeants')->where('pub_status',1)->get();
    }

    static public function Select_admin_info_byId($id){
    	return DB::table('bdc_users')->where('pub_status',1)->where('user_id',$id)->first();
    }

    static public function Select_zilaadmin_info_byId($id){
    	return DB::table('bdc_zilla_admins')->where('pub_status',1)->where('zil_id',$id)->first();
    }

    static public function Select_upazila_admin_info_byId($id){
    	return DB::table('bdc_upazila_admin')->where('pub_status',1)->where('uzl_id',$id)->first();
    }

    static public function Select_sergeant_info_byId($id){
    	return DB::table('bdc_sergeants')->where('pub_status',1)->where('ser_id',$id)->first();
    }

    static public function find_user_role($role){
    	return DB::table('bdc_users')->where('pub_status',1)->where('user_id',$id)->first();
    }

    static public function find_role_name($id){
        return DB::table('roles')->where('id',$id)->first();
    }
    // Zilla Admin Select Query start
    static public function select_upazila_role_profile_($area){
        return DB::table('bdc_upazila_admin')->where('pub_status',1)->where('uzl_working_area',$area)->get();
    }
    static public function select_sergents_role_profile_($area){
        return DB::table('bdc_sergeants')->where('pub_status',1)->where('ser_working_area',$area)->get();
    }

    

}
