<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\NoticeRequest;
use DB;
use Session;
use input;
use validator;
use view;
use Redirect; 
use App\SelectModel;  
session_start();
class BackendController extends Controller
{
    //
    public function index(){  
    	$id=Session::get('user_id');
    	$role_id=Session::get('role_id');
    	if(empty($id)==true and empty($role_id)==true){
    		return Redirect::to("/user_login");
    	}else{ 
    	return view('admin/index');
    	}
    }

    public function admin_login(){
        return view('admin.admin_login');
    }

    public function admin_notice(){
        $notice = SelectModel::select_all_notice();
        $statement = view('admin/notice_board')->with('notices',$notice); 
        return view('master.admin_layout')->with('admin/notice_board',$statement); 
    }

    public function create_notice(NoticeRequest $request){
        $role   =Session::get('role_id');
        $id     =Session::get('user_id');
        $data=[
            'not_name'=>$request->not_name,
            'not_desc'=>$request->not_desc,
            'not_role'=>$role,
            'not_date'=>date('d-M-Y'),
            'not_cretor'=>$id
        ];
        $result = DB::table('bdc_notices')->insert($data);
        if($result){
            return redirect('admin_notice')->with('msg',"Notice Submit successfull!");
        }
    }

    // Zilla admin function start

    public function zilla_notice(){
        $role   =Session::get('role_id');
        $id     =Session::get('user_id');
        $notice = SelectModel::select_all_zilla_notice($id,$role);
        $statement = view('subadmin/notice_board')->with('notices',$notice); 
        return view('master.admin_layout')->with('subadmin/notice_board',$statement); 
    }
    public function zilla_notice_submit(NoticeRequest $request){
        $role   =Session::get('role_id');
        $id     =Session::get('user_id');
        $data=[
            'not_name'=>$request->not_name,
            'not_desc'=>$request->not_desc,
            'not_role'=>$role,
            'not_date'=>date('d-M-Y'),
            'not_cretor'=>$id
        ];
        $result = DB::table('bdc_notices')->insert($data);
        if($result){
            return redirect('zilla_notice')->with('msg',"Notice Submit successfull!");
        }
    }

    
}
