<?php

namespace App;
use DB;
use Session;
use Illuminate\Database\Eloquent\Model;

class CaseModel extends Model
{
    //
    static public function pending_case_search($status){
    	return DB::table('cases')  
                ->join('case_types', 'cases.case_type_id','=','case_types.id')  
                ->join('bdc_owners', 'cases.owner_id','=','bdc_owners.won_id')  
                ->join('bdc_drivers', 'cases.driver_id','=','bdc_drivers.dri_id')  
                ->join('cars', 'cases.car_id','=','cars.id')  
                ->select('case_types.*','bdc_owners.won_name','bdc_drivers.dri_name','cars.car_reg_num','cases.*')  
    			->where('cases.case_status',$status) 
    			->orderBy('cases.id', 'DESC')
    			->get();
    }
    static public function pending_case_search_byId($id){
    	return DB::table('cases')  
                ->join('case_types', 'cases.case_type_id','=','case_types.id')  
                ->join('bdc_owners', 'cases.owner_id','=','bdc_owners.won_id')  
                ->join('bdc_drivers', 'cases.driver_id','=','bdc_drivers.dri_id')  
                ->join('cars', 'cases.car_id','=','cars.id')  
                ->select('case_types.*','bdc_owners.*','bdc_drivers.*','cars.*','cases.*')  
    			// ->where('cases.case_status',1)
    			->where('cases.id',$id)
    			->orderBy('cases.id', 'DESC')
    			->first();
    }

    static public function More_pending_case_search($id=null){
    	return DB::table('cases')  
            ->join('case_types', 'cases.case_type_id','=','case_types.id')  
            ->join('bdc_owners', 'cases.owner_id','=','bdc_owners.won_id')  
            ->join('bdc_drivers', 'cases.driver_id','=','bdc_drivers.dri_id')  
            ->join('cars', 'cases.car_id','=','cars.id')  
            ->select('case_types.*','bdc_owners.won_name','bdc_drivers.dri_name','cars.car_reg_num','cases.*')  
			->where('cases.car_id',$id) 
			->orderBy('cases.id', 'DESC')
			->get();
    }

    public static function zila_pending_case_search($status,$area){
        return DB::table('cases')  
            ->join('case_types', 'cases.case_type_id','=','case_types.id')  
            ->join('bdc_owners', 'cases.owner_id','=','bdc_owners.won_id')  
            ->join('bdc_drivers', 'cases.driver_id','=','bdc_drivers.dri_id')  
            ->join('cars', 'cases.car_id','=','cars.id')  
            ->select('case_types.*','bdc_owners.won_name','bdc_drivers.dri_name','cars.car_reg_num','cases.*')  
            ->where('cases.case_status',$status) 
            ->where('cases.case_area',$area) 
            ->orderBy('cases.id', 'DESC')
            ->get();  
    }

    public static function upazila_widthdraw_case_search($status,$area,$user_id){
        return DB::table('cases')  
            ->join('case_types', 'cases.case_type_id','=','case_types.id')  
            ->join('bdc_owners', 'cases.owner_id','=','bdc_owners.won_id')  
            ->join('bdc_drivers', 'cases.driver_id','=','bdc_drivers.dri_id')  
            ->join('cars', 'cases.car_id','=','cars.id')  
            ->select('case_types.*','bdc_owners.won_name','bdc_drivers.dri_name','cars.car_reg_num','cases.*')  
            ->where('cases.case_status',$status) 
            // ->where('cases.case_area',$area) 
            ->where('cases.withdraw_id',$user_id) 
            ->orderBy('cases.id', 'DESC')
            ->get();
    }
     public static function upazila_pending_case_search($status,$area,$user_id){
        return DB::table('cases')  
            ->join('case_types', 'cases.case_type_id','=','case_types.id')  
            ->join('bdc_owners', 'cases.owner_id','=','bdc_owners.won_id')  
            ->join('bdc_drivers', 'cases.driver_id','=','bdc_drivers.dri_id')  
            ->join('cars', 'cases.car_id','=','cars.id')  
            ->select('case_types.*','bdc_owners.won_name','bdc_drivers.dri_name','cars.car_reg_num','cases.*')  
            ->where('cases.case_status',$status) 
            ->where('cases.case_area',$area) 
            // ->where('cases.withdraw_id',$user_id) 
            ->orderBy('cases.id', 'DESC')
            ->get();
    }


    public static function case_with_draw($data,$case_id){
        return DB::table('cases')->where('id',$case_id)->update($data);
    }
}
