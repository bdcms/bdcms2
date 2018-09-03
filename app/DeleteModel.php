<?php

namespace App;

use Illuminate\Database\Eloquent\Model; 
use DB;
use Session;
class DeleteModel extends Model
{
    //

    public static function default_delete_function($id=NULL,$table=NULL,$other=NULL){
    	return DB::table("$table")->where("$table.$other",$id)->delete();
    }

}
