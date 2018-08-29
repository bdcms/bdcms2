<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB; 
use Session;
use Redirect;
use App\SelectModel;
// session_start();
class ApplicationController extends Controller
{
    //

    

    public function NewApplication(){
        $area=Session::get('user_posting');  
    	$data = SelectModel::NewApplication($area);   
    	$statement = view('admin/NewApplication')
    		->with('allinfo',$data); 
    	return view('master.admin_layout')
    		->with('admin/NewApplication',$statement); 
    }

    public function Approved_Application(){ 
    	$data = SelectModel::Approved_Application(); 

    	$statement = view('admin/Approved_car_list')
    		->with('allinfo',$data); 
    	return view('master.admin_layout')
    		->with('admin/Approved_car_list',$statement);  
    }

    public function Application_Single($id){ 
    	$data =    SelectModel::Application_Single($id);

    	$statement = view('admin/application_single')
    		->with('carinfo',$data); 
    	return view('master.admin_layout')
    		->with('admin/application_single',$statement);  
    }

    public function Application_Approved($id){
    	$data['car_status']=1;//Car status active 
        //driver status find out and if driver status unactive then make it active 
    	$driver_info = SelectModel::single_driver_info($id);
       

    	$driver_id=$driver_info->dri_id; 
    	$driver_status=$driver_info->pub_status; 
    	$driver_update['pub_status']=1; 

    	if($driver_status==NULL){
            SelectModel::single_driver_info_update($driver_id,$driver_update);  
    	}//exit driver activation

        //Owner status find out and if Owner status unactive then make it active 

        $driver_info= SelectModel::single_owner_info($id); 
        $owner_id=$driver_info->id; 
        $owner_status=$driver_info->pub_status; 
        $owner_update['pub_status']=1; 
        if($owner_status==NULL){
            SelectModel::single_owner_info_update($owner_id,$owner_update);  
        }//exit Owner activation

    	$action = SelectModel::single_cars_info_update($id,$data);
         

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

    public function unapprove_application_count(){
        return 4;
    }
}//Controller Class Start
