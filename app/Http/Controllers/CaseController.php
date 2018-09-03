<?php

namespace App\Http\Controllers;

use App\CaseModel;
use App\SelectModel;
use Illuminate\Http\Request;
use DB; 
use Session;
use Redirect;
session_start();
class CaseController extends Controller
{
    //
    public function PendingCase(){
        $status=1;
        $data = CaseModel::pending_case_search($status);  
    	$statement = view('admin/pending_case')
    		->with('case_info',$data); 
    	return view('master.admin_layout')
    		->with('admin/pending_case',$statement); 
    }

    public function case_single($id){
        $data = CaseModel::pending_case_search_byId($id);
        $carid=$data->car_id; 
        // echo $carid;exit;
        $morecase = CaseModel::More_pending_case_search($carid);   
        $statement = view('admin.single.case_single')->with('case_info',$data)->with('morecase',$morecase); 
        return view('master.admin_layout')->with('admin/pending_case',$statement); 
    }

    public function WithDrawCase(){
        $status=0;
        $data = CaseModel::pending_case_search($status);  
        $statement = view('admin/pending_case')
            ->with('case_info',$data); 
        return view('master.admin_layout')
            ->with('admin/pending_case',$statement); 
    }
    // Zilla admin function start
    public function Pending_Case(){ 
        $area     =Session::get('user_posting'); 
        $status=1;
        $data = CaseModel::zila_pending_case_search($status,$area); 
        $statement = view('subadmin/pending_case')->with('case_info',$data); 
        return view('master.admin_layout')->with('subadmin/pending_case',$statement);
    }

    public function WithDraw_Case(){
        $area     =Session::get('user_posting'); 
        $status=0;
        $data = CaseModel::zila_pending_case_search($status,$area); 
        $statement = view('subadmin/pending_case')->with('case_info',$data); 
        return view('master.admin_layout')->with('subadmin/pending_case',$statement);
    }

     
}//Exit Class
