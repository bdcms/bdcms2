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
        $status     = 1;
        $data       = CaseModel::pending_case_search($status);   
    	$statement  = view('admin/pending_case')->with('case_info',$data); 
    	return view('master.admin_layout')->with('admin/pending_case',$statement); 
    }

    public function case_single($id){
        $data       = CaseModel::pending_case_search_byId($id); 
        $carid      = $data->car_id; 
        $case_area  = SelectModel::select_district_byid($data->case_area);
        $car_metro  = SelectModel::select_district_byid($data->car_metro); 
        $morecase   = CaseModel::More_pending_case_search($carid); 
        $statement  = view('admin.single.case_single')->with('case_info',$data)->with('morecase',$morecase)
        ->with('area',$case_area)->with('metro',$car_metro); 
        return view('master.admin_layout')->with('admin/pending_case',$statement); 
    }
    public static function select_district_name($id){
        return SelectModel::select_district_byid($id);
    }

    public function WithDrawCase(){
        $status     = 0;
        $data       = CaseModel::pending_case_search($status); 
        
        $statement  = view('admin/pending_case')->with('case_info',$data); 
        return view('master.admin_layout')->with('admin/pending_case',$statement); 
    }

// Zilla admin function start ____________________________________________________________________________________________
    public function Pending_Case(){ 
        $area       = Session::get('user_posting'); 
        $status     = 1;
        $data       = CaseModel::zila_pending_case_search($status,$area); 
        $region     = SelectModel::select_district_byid($area); 
        $statement  = view('subadmin/pending_case')->with('case_info',$data)->with('area',$region); 
        return view('master.admin_layout')->with('subadmin/pending_case',$statement);
    }

    public function WithDraw_Case(){
        $area       = Session::get('user_posting'); 
        $status     = 0;
        $data       = CaseModel::zila_pending_case_search($status,$area);
        $region     = SelectModel::select_district_byid($area); 
        $statement  = view('subadmin/pending_case')->with('case_info',$data)->with('area',$region); 
        return view('master.admin_layout')->with('subadmin/pending_case',$statement);
    } 
// UpaZilla admin function start ____________________________________________________________________________________________
    public function upazila_WithDraw_Case(){
        $area        = Session::get('user_posting'); 
        $user_id     = Session::get('user_id');  
        $status      = 0;
        $data        = CaseModel::upazila_widthdraw_case_search($status,$area,$user_id); 
        $region      = SelectModel::select_district_byid($area);
        $statement   = view('upazila/pending_case')->with('case_info',$data)->with('area',$region); 
        return view('master.admin_layout')->with('upazila/pending_case',$statement);
    }
    public function upazila_pending_Case(){
        $area        = Session::get('user_posting'); 
        $user_id     = Session::get('user_id');  
        $status      = 1;
        $data        = CaseModel::upazila_pending_case_search($status,$area,$user_id); 
        $region      = SelectModel::select_district_byid($area); 
        $statement   = view('upazila/pending_case')->with('case_info',$data)->with('area',$region); 
        return view('master.admin_layout')->with('upazila/pending_case',$statement);
    }

    public function case_with_draw(Request $request){
        $case_id=$request->case_id; 
        $user_id=Session::get('user_id');
        $role_id=Session::get('role_id');
        $date=date('d-M-Y');

        $data=[
            'withdraw_id'=>$user_id,
            'withdraw_date'=>$date,
            'withdraw_role'=>$role_id,
            'case_status'=>0
        ];

        $resutl = CaseModel::case_with_draw($data,$case_id);
        return Redirect("/Case_Single/$case_id")->with('msg', 'Case With Draw Successfully!'); 
    }

    public function upazila_car_search(Request $request){
        $id=$request->case_number;
        $data       = CaseModel::pending_case_search_byId($id); 
        $carid      = $data->car_id; 
        $case_area  = SelectModel::select_district_byid($data->case_area);
        $car_metro  = SelectModel::select_district_byid($data->car_metro); 
        $morecase   = CaseModel::More_pending_case_search($carid); 
        $statement  = view('admin.single.case_single')->with('case_info',$data)->with('morecase',$morecase)
        ->with('area',$case_area)->with('metro',$car_metro); 
        return view('master.admin_layout')->with('admin/pending_case',$statement); 
    }

    public static function find_out_case_widthdraw_name($id,$role){ 
        return SelectModel::find_out_case_widthdraw_name($id,$role);
    }




























}//Exit Class
