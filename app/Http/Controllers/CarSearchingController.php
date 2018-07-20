<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CarInfoSearch;
use App\Http\Requests\CaseSubmitRequest;
use DB; 
use Session;
use Redirect;
session_start();
class CarSearchingController extends Controller
{
    //
    public function CarInformation(CarInfoSearch $request){ 
    	$district  = $request->district;
    	$digits    = $request->digits;
    	$number    = $request->number; 
    	$first     = substr($number, 0, 2);
    	$last      = substr($number, 2, 5);  
        $number    = $district." ".$digits." ".$first."-".$last; 
        
    	$action    = DB::table('cars')
    			     ->where('car_reg_num',$number)
    			     ->first(); 
        if($action){
            Session::put('car_Reg_Number',$number);//Use for backup of case submit with out User login
            Session::put('alredy_login',1); //Use for backup of case submit with out User login
    		$statement = view('search_out')->with('allinfo',$action); 
            return view('master.master')->with('search_out',$statement);
        }else{
            $this->_flash_Message($action,'Car Find out successful.','The number you are looking are not found.');
            return Redirect('/');
        }
    }

    public function Search_Fount(){
        $previous  = Session::get('car_Reg_Number');
        Session::get('car_Reg_Number',NULL);
        $action    = DB::table('cars')
                     ->where('car_reg_num',$previous)
                     ->first();
        $statement = view('search_out')->with('allinfo',$action); 
        return view('master.master')->with('search_out',$statement);
    }


    public function case_submit(Request $request){
        $car_reg_num            =$request->car_number; 
        $car_id                 =DB::table('cars')->where('car_reg_num',$car_reg_num)->first();  
        $data['driver_id']      =$car_id->driver_id;
        $data['car_id']         =$car_id->id;
        $data['owner_id']       =$car_id->owner_id;
        $data['case_area']      =$request->place;
        $data['case_type_id']   =$request->case_couse;
        $data['case_desc']      =$request->discription;
        $data['black_list']     =$request->black;
        $data['complainant_date']=date('d-M-Y');
        $data['complainant_id']=$id=Session::get('user_id');

        $role_id=Session::get('role_id');
        if(empty($id)==true and empty($role_id)==true){
            return Redirect('/login');
        }else{ 
            $action = DB::table('cases')->insert($data);
            $this->_flash_Message($action,'Case Submited Successfully.','Case Submit Faild.');
            return Redirect('/');
        }
    }


 

















    private function _flash_Message($action, $message, $faield){
        if($action){
            Session::put('message', $message);
            Session::put('class','alert alert-success');
        }else{
            Session::put('message', $faield);
            Session::put('class','alert alert-error');
        } 
    }
}//Class Exit
