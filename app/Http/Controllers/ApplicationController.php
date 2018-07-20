<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB; 
use Session;
use Redirect;
session_start();
class ApplicationController extends Controller
{
    //

    

    public function NewApplication(){
        $xxx=Session::get('user_posting'); 
    	$data = DB::table('cars')
    			->join('carnames','cars.carname_id','=','carnames.id') 
    			->join('users','cars.owner_id','=','users.id')
    			->select('carnames.car_name','users.*','cars.*')
                ->where('cars.car_status',0) 
                ->where('cars.car_metro',"$xxx")
    			->orderBy('cars.id', 'DESC')
    			->get(); 

    	$statement = view('admin/NewApplication')
    		->with('allinfo',$data); 
    	return view('master.admin_layout')
    		->with('admin/NewApplication',$statement); 
    }

    public function Approved_Application(){ 
    	$data = DB::table('cars')
    			->join('users','cars.owner_id','=','users.id')
    			->join('carnames','cars.carname_id','=','carnames.id')
    			->select('carnames.car_name','users.*','cars.*') 
    			->where('cars.car_status',1)
    			->orderBy('cars.id', 'DESC')
    			->get(); 

    	$statement = view('admin/Approved_car_list')
    		->with('allinfo',$data); 
    	return view('master.admin_layout')
    		->with('admin/Approved_car_list',$statement);  
    }

    public function Application_Single($id){ 
    	$data = DB::table('cars') 
    			->join('carnames','cars.carname_id','=','carnames.id') 
    			->join('users','cars.owner_id','=','users.id') 
    			->select('carnames.car_name','users.*','cars.*')
    			->where('cars.id',$id)
    			->first();   

    	$statement = view('admin/application_single')
    		->with('carinfo',$data); 
    	return view('master.admin_layout')
    		->with('admin/application_single',$statement);  
    }

    public function Application_Approved($id){
    	$data['car_status']=1;//Car status active 
        //driver status find out and if driver status unactive then make it active 
    	$driver_info=DB::table('cars') 
    				->join('users','cars.driver_id','=','users.id')
    				->where('cars.id',$id) 
    				->select('cars.*','users.*')
    				->first(); 
    	$driver_id=$driver_info->id; 
    	$driver_status=$driver_info->pub_status; 
    	$driver_update['pub_status']=1; 
    	if($driver_status==NULL){
    		DB::table('users')
		    		->where('id',$driver_id)
		    		->update($driver_update);
    	}//exit driver activation

        //Owner status find out and if Owner status unactive then make it active 
        $driver_info=DB::table('cars') 
                    ->join('users','cars.owner_id','=','users.id')
                    ->where('cars.id',$id) 
                    ->select('cars.*','users.*')
                    ->first(); 
        $owner_id=$driver_info->id; 
        $owner_status=$driver_info->pub_status; 
        $owner_update['pub_status']=1; 
        if($owner_status==NULL){
            DB::table('users')
                    ->where('id',$owner_id)
                    ->update($owner_update);
        }//exit Owner activation

    	$action = DB::table('cars')
		    		->where('id',$id)
		    		->update($data);   
		$this->_flash_Message($action,'Application Approved Successfully.','Application approved Faild.');
		return Redirect("/Approved_Application");
    	 
	}

	public function Application_Delete($id){ 
		$action = DB::table('cars')
    		->where('id',$id)
    		->delete();
    		$this->_flash_Message($action,'Application Delete Successfully.','Application Delete Faild.');
    		return Redirect('/NewApplication');
	} 

	public function Application_Reject($id){ 
		if($id){
			$action=1;
		}
		$this->_flash_Message($action,'Application Requirement Message Sending Successfully.','Application Requirement Message Sending Faild.');
		return Redirect('/NewApplication');
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
}
