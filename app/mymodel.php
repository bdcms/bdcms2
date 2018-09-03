<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class mymodel extends Model
{
    //

    static public function Find_out_table_by_role($role){
    	switch ($role) {
    		case '1':
    			return "bdc_users";
    		case '2':
    			return "bdc_owners";
    		case '3':
    			return "bdc_drivers";
    		case '4':
    			return "bdc_zilla_admins";
    		case '5':
    			return "bdc_upazila_admin";
    		case '6':
    			return "bdc_sergeants";
    }

     
 
}
