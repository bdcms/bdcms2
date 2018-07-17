<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CarInfoSearch;
use DB;
class CarSearchingController extends Controller
{
    //
    public function CarInformation(CarInfoSearch $request){
    	$district = $request->district;
    	$digits   = $request->digits;
    	$number   = $request->number; 
    	$first = substr($number, 0, 2);
    	$last = substr($number, 2, 5); 
    	$number = $district." ".$digits." ".$first."-".$last;
    	 echo $number;
    	$data = DB::table('cars')
    			->where('car_reg_num',$number)
    			->first();
    			echo "<pre>";
    		print_r($data);
    }
}
