<?php

namespace App;
use DB;
use Session;
use Illuminate\Database\Eloquent\Model;

class SergeantModel extends Model
{
    //
    public static function select_sergeant_information($id){
    	return DB::table('bdc_sergeants')->where('ser_id',$id)->first();
    }

    public static function update_sergeant_info($data,$id){
    	return DB::table('bdc_sergeants')->where('ser_id',$id)->update($data);
    }
}
