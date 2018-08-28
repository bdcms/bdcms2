<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use input;
use validator;
use view;
use Redirect;   
session_start();
class BackendController extends Controller
{
    //
    public function index(){  
    	$id=Session::get('user_id');
    	$role_id=Session::get('role_id');
    	if(empty($id)==true and empty($role_id)==true){
    		return Redirect::to("/login");
    	}else{ 
    	return view('admin/index');
    	}
    }

     public function admin_login(){
        return view('admin.admin_login');
     }

    
}
