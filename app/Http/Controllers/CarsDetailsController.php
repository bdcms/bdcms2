<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB; 
use Session;
use Redirect;
class CarsDetailsController extends Controller
{
    //
    public function index(){
    	$data = DB::table('cars')
    			->join('carnames','cars.carname_id','=','carnames.id') 
    			->join('users','cars.owner_id','=','users.id')
    			->select('carnames.car_name','users.*','cars.*')
    			->where('cars.car_status',1)
    			->orderBy('cars.id', 'DESC')
    			->get(); 

    	$statement = view('admin/car_information')
    		->with('carinfo',$data); 
    	return view('master.admin_layout')
    		->with('admin/car_information',$statement); 
    }
}
