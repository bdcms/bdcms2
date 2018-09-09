<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CarInfoSearch;
use App\Http\Requests\CaseSubmitRequest;
use DB; 
use Session;
use Redirect;
use App\SelectModel;
session_start();
class CarSearchingController extends Controller
{
    //
    public function CarInformation(CarInfoSearch $request){ 
    	$district  = trim($request->district);
    	$digits    = trim($request->digits);
    	$number    = trim($request->number); 
    	$first     = substr($number, 0, 2);
    	$last      = substr($number, 2, 5);  
        $number    = $district." ".$digits." ".$first."-".$last;  
    	$action    = SelectModel::single_car_info($number); 
        if($action){
            $data=array();
            $insurance = SelectModel::single_car_insurence_info($number);
            $current=date('d-M-Y');
            $insu_date=$insurance->ins_exp_date; 
            // echo $current."current <br>".$insu_date;
            if($insu_date>$current){ 
                $ins_date=1;
            }else{ 
                $ins_date=0;
            } 


            $black_list = SelectModel::single_car_case_info($action->id); 
            // Session::put('car_Reg_Number',$number);//Use for backup of case submit without User login
            // Session::put('alredy_login',1); //Use for backup of case submit without User login
            
    		$statement = view('search_out')->with('allinfo',$action)->with('black_list',$black_list)->with('ins_date',$ins_date); 
            return view('master.master')->with('search_out',$statement);
        }else{
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
        $area=SelectModel::car_metro_search($request->place); 
        if($request->black==''){
            $balck_list=0;
        }else{$balck_list=1;} 
        $car_reg_num            =$request->car_number; 
        $car_id                 =DB::table('cars')->where('car_reg_num',$car_reg_num)->first();  
        $data['driver_id']      =$car_id->driver_id;
        $data['car_id']         =$car_id->id;
        $data['owner_id']       =$car_id->owner_id;
        $data['case_area']      =$area->metro_id;
        $data['case_type_id']   =$request->case_couse;
        $data['case_desc']      =$request->discription;
        $data['black_list']     =$balck_list;
        $data['complainant_date']=date('d-M-Y');
        $data['complainant_id']=$id=Session::get('user_id');

        $role_id=Session::get('role_id');
        if(empty($id)==true and empty($role_id)==true){
            return Redirect('/login');
        }else{ 
            $action = DB::table('cases')->insert($data); 
            return redirect('/')->with('msg','Case Submitted Successfully!.');
        }
    }


    public function Search_out($number=null){
        $action    = DB::table('cars')
                     ->where('car_reg_num',$number)
                     ->first();
        $statement = view('search_out')->with('allinfo',$action); 
            return view('master.master')->with('search_out',$statement); 
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
