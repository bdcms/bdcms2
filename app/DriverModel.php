<?php

namespace App;
use DB;
use Session;

use Illuminate\Database\Eloquent\Model;

class DriverModel extends Model
{
    //
    public static function select_driver_information($id){
    	return DB::table('bdc_drivers')->where('dri_id',$id)->first();
    }

    public static function update_driver_info($data,$id){
    	return DB::table('bdc_drivers')->where('dri_id',$id)->update($data);
    }
}
