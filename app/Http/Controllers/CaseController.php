<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB; 
use Session;
use Redirect;
session_start();
class CaseController extends Controller
{
    //
    public function PendingCase(){
    	   $data = DB::table('cases')  
                ->join('users as ownerdata','cases.owner_id','=','ownerdata.id')  
                ->select('ownerdata.user_name as owner')  
    			->where('cases.case_status',1)
    			->orderBy('cases.id', 'DESC')
    			->get();   
    	$statement = view('admin/pending_case')
    		->with('case_info',$data); 
    	return view('master.admin_layout')
    		->with('admin/pending_case',$statement); 
    }

    public function WithDrawCase(){

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
}//Exit Class
