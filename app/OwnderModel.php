<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use Session;
class OwnderModel extends Model
{
    //
    public static function select_owner_information($id){
    	return DB::table('bdc_owners')->where('won_id',$id)->first();
    }

    public static function update_owner_info($data,$id){
    	return DB::table('bdc_owners')->where('won_id',$id)->update($data);
    }
}
