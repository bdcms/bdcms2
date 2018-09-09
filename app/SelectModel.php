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
                return DB::table('bdc_users')       ->where('user_email','=',$email)->where('user_password','=',$password)->first(); 
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

// Front end site query
    public static function selectall_cars_info(){
        return DB::table('cars')->where('car_status',1)->get();
    }

    //front page car history table info query
    public static function select_district_bus($dis,$id){
        return DB::table('cars')->where('car_metro',$dis)->where('carname_id',$id)->count();
    }
    public static function select_district_track($dis,$id){
        return DB::table('cars')->where('car_metro',$dis)->where('carname_id',$id)->count();
    }
    public static function select_district_motorcycle($dis,$id){
        return DB::table('cars')->where('car_metro',$dis)->where('carname_id',$id)->count();
    }
    public static function select_district_minibus($dis,$id){
        return DB::table('cars')->where('car_metro',$dis)->where('carname_id',$id)->count();
    }
    public static function select_all_metro_id(){
        return DB::table('bdc_metros')->get();
    }

    //front page case history table info query
    public static function select_district_case_bus($dis,$id){
        return DB::table('cases')->where('case_area',$dis)->where('case_type_id',$id)->where('case_status',1)->count();
    }
    public static function select_district_case_track($dis,$id){
        return DB::table('cases')->where('case_area',$dis)->where('case_type_id',$id)->where('case_status',1)->count();
    }
    public static function select_district_case_motorcycle($dis,$id){
        return DB::table('cases')->where('case_area',$dis)->where('case_type_id',$id)->where('case_status',1)->count();
    }
    public static function select_district_case_minibus($dis,$id){
        return DB::table('cases')->where('case_area',$dis)->where('case_type_id',$id)->where('case_status',1)->count();
    }

    //front page all notice query
    public static function select_all_notices(){
        return DB::table('bdc_notices')->where('not_status',1)->get();
    } 
    

 
     
// Admin query
    public static function unapprove_application_count(){
        return DB::table('cars')->where('car_status',0)->get();
    }
    public static function NewApplication(){
        return DB::table('cars')
            ->join('carnames','cars.carname_id','=','carnames.id') 
            ->join('bdc_owners','cars.owner_id','=','bdc_owners.won_id')
            ->select('carnames.car_name','bdc_owners.*','cars.*')
            ->where('cars.car_status',0) 
            // ->where('cars.car_metro',"$area")
            ->orderBy('cars.id', 'DESC')
            ->get();
    }

    public static function Approved_Application(){
        return DB::table('cars')
            ->join('bdc_owners','cars.owner_id','=','bdc_owners.won_id')
            ->join('bdc_drivers','cars.driver_id','=','bdc_drivers.dri_id')
            ->join('carnames','cars.carname_id','=','carnames.id')
            ->select('carnames.car_name','bdc_owners.*','cars.*') 
            ->where('cars.car_status',1)
            ->orderBy('cars.id', 'DESC')
            ->get();
    }
    public static function Application_Single($id){
        return DB::table('cars') 
                ->join('carnames','cars.carname_id','=','carnames.id') 
                ->join('bdc_owners','cars.owner_id','=','bdc_owners.won_id') 
                ->select('carnames.car_name','bdc_owners.*','cars.*')
                ->where('cars.id',$id)
                ->first();
    }
    public static function single_driver_info($id){
            return DB::table('cars') 
            ->join('bdc_drivers','cars.driver_id','=','bdc_drivers.dri_id')
            ->where('cars.id',$id) 
            ->select('cars.*','bdc_drivers.*')
            ->first();
    }

    public static function single_driver_info_update($driver_id,$driver_update){
        return DB::table('bdc_drivers')
            ->where('dri_id',$driver_id)
            ->update($driver_update);
    }

    public static function single_owner_info($id){ 
        return DB::table('cars') 
            ->join('bdc_owners','cars.owner_id','=','bdc_owners.won_id')
            ->where('cars.id',$id) 
            ->select('cars.*','bdc_owners.*')
            ->first();
    }

    public static function single_owner_info_update($owner_id,$owner_update){
        return DB::table('bdc_owners')
            ->where('won_id',$owner_id)
            ->update($owner_update);
    }

    public static function single_cars_info_update($id,$data){
        return DB::table('cars')
            ->where('id',$id)
            ->update($data); 
    }

    public static function driver_list_out(){
        return DB::table('bdc_drivers')  
            ->join('cars', 'bdc_drivers.dri_car_id','=','cars.id')  
            ->select('cars.car_reg_num','bdc_drivers.*') 
            ->orderBy('bdc_drivers.dri_id', 'DESC')
            ->get();
    } 

    public static function Owner_list_out(){
        return DB::table('bdc_owners')  
            ->join('cars', 'bdc_owners.won_car_id','=','cars.id')  
            ->select('cars.car_reg_num','bdc_owners.*') 
            ->orderBy('bdc_owners.won_id', 'DESC')
            ->get();
    }

    public static function select_all_metro(){
        return DB::table('bdc_metros')->get();
    }

    public static function select_all_metro_keyword(){
        return DB::table('bdc_keywords')->get();
    }

    //Zilla Admin All of Querys start//////////////////////////////////////////////////////

     public static function NewApplication_zilla($area){
        return DB::table('cars')
            ->join('carnames','cars.carname_id','=','carnames.id') 
            ->join('bdc_owners','cars.owner_id','=','bdc_owners.won_id')
            ->select('carnames.car_name','bdc_owners.*','cars.*')
            ->where('cars.car_status',0) 
            ->where('cars.car_metro', $area)
            ->orderBy('cars.id', 'DESC')
            ->get();
    }
    public static function Approved_Application_zilla($area){
        return DB::table('cars')
            ->join('bdc_owners','cars.owner_id','=','bdc_owners.won_id')
            ->join('bdc_drivers','cars.driver_id','=','bdc_drivers.dri_id')
            ->join('carnames','cars.carname_id','=','carnames.id')
            ->select('carnames.car_name','bdc_owners.*','cars.*') 
            ->where('cars.car_status',1)
            ->where('cars.car_metro', $area)
            ->orderBy('cars.id', 'DESC')
            ->get();
    }  
    public static function car_metro_search($data){
        return DB::table('bdc_metros')->where('metro_name',$data)->first(); 
    }

    public static function zila_driver_list_out($area){
        return DB::table('bdc_drivers')  
            ->join('cars', 'bdc_drivers.dri_car_id','=','cars.id')  
            ->select('cars.car_reg_num','bdc_drivers.*') 
            ->where('bdc_drivers.dri_working_are',$area)
            ->orderBy('bdc_drivers.dri_id', 'DESC')
            ->get();
    }

    public static function zila_Owner_list_out($area){
        return DB::table('bdc_owners')  
            ->join('cars', 'bdc_owners.won_car_id','=','cars.id')  
            ->where('bdc_owners.won_city',$area)
            ->select('cars.car_reg_num','bdc_owners.*') 
            ->orderBy('bdc_owners.won_id', 'DESC')
            ->get();
    }

    public static function select_all_notice(){
        return DB::table('bdc_notices')->get();
    }

    public static function select_district_byid($area){
        return DB::table('bdc_metros')->where('metro_id',$area)->first(); 
    }

    // Frontend site Select Query Start
    public static function single_car_info($number){
        return DB::table('cars')->where('car_reg_num',$number)->first(); 
    }
    public static function single_car_case_info($number){
        return DB::table('cases')->where('car_id',$number)->where('black_list',1)->count(); 
    }

    public static function single_car_insurence_info($number){
        return DB::table('bdc_insurences')->where('ins_carid',$number)->select('bdc_insurences.ins_exp_date')->first(); 
    }
    public static function select_all_zilla_notice($id,$role){
        return DB::table('bdc_notices')->where('not_cretor',$id)->where('not_role',$role)->get();
    }

    // public static function select_single_profile_info($id,$role){
    //     if($role==2){
    //         $data= DB::table("bdc_owners")->where("won_id",$id)->first(); 
             
    //     }elseif($role==3){
    //         $data= DB::table("bdc_drivers")->where("dri_id",$id)->first(); 
    //     }elseif($role==6){
    //         $data= DB::table("bdc_sergeants")->where("ser_id",$id)->first();  
    //     }
        
    // }


    // Upazila admin select query
    public static function select_upazila_admin_info($id){
        return DB::table('bdc_upazila_admin')->where('uzl_id','=',$id)->first();
    }
    public static function find_out_case_widthdraw_name($id,$role){
        switch ($role) {
            case '5':
                $data=DB::table('bdc_upazila_admin')->where('uzl_id','=',$id)->first();
                return $data->uzl_name;
                break;
            case '4':
                $data=DB::table('bdc_zilla_admins')->where('zil_id','=',$id)->first();
                return $data->zil_name;
                break;
            case '1':
                $data=DB::table('bdc_users')->where('id','=',$id)->first();
                return $data->name;
                break;  
        }
    }

    

















}//Controller Class Exit
