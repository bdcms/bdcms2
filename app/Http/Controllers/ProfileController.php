<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProfileRequest;
use DB; 
use Session;
use App\ProfileModel;
use App\SelectModel;
use App\Existing;
use App\mymodel;
use Redirect;
class ProfileController extends Controller
{
    //
    public function New_Profile(){
    	return view('admin/open_Profile');
    }

    public function newrole(Request $request){ 
        $role       = $request->role_id; 
        // echo $role;exit;
        $posting    = SelectModel::car_metro_search($request->user_posting);
        if($role==4) { 
                $data = array();
                $data['zil_name']       = $request->user_name; 
                $data['zil_email']      = $request->user_email;
                $data['zil_mobile']     = $request->user_mobile;
                $data['zil_address']    = $request->user_address; 
                $data['zil_working_area']= $posting->metro_id;  
                $data['zil_fname']      = $request->user_fname;   
                $data['zil_gender']     = $request->user_gender;  
                $data['zil_birthday']   = $request->user_birtahdate;  
                $data['zil_nid']        = $request->user_nid;  
                $data['zil_joining_date']= date('M/D/Y');  
                $data['zil_password']   = md5(str_random(6)); 
                $data['remember_token'] = md5(str_random(6)); 
                $table = 'bdc_zilla_admins'; 
            }
        elseif($role==5){ 
                $data = array();
                $data['uzl_name']       = $request->user_name; 
                $data['uzl_email']      = $request->user_email;
                $data['uzl_mobile']     = $request->user_mobile;
                $data['uzl_address']    = $request->user_address; 
                $data['uzl_working_area']= $posting->metro_id;  
                $data['uzl_fname']      = $request->user_fname;   
                $data['uzl_gender']     = $request->user_gender;  
                $data['uzl_birthday']   = $request->user_birtahdate;  
                $data['uzl_nid']        = $request->user_nid;  
                $data['uzl_joining_date']= date('M/D/Y');  
                $data['uzl_password']   = md5(str_random(6)); 
                $data['remember_token'] = md5(str_random(6)); 
                $table = 'bdc_upazila_admin'; 
            }
        elseif($role==6){ 
                $data = array();
                $data['ser_name']       = $request->user_name; 
                $data['ser_email']      = $request->user_email;
                $data['ser_mobile']     = $request->user_mobile;
                $data['ser_address']    = $request->user_address; 
                $data['ser_working_area']= $posting->metro_id;  
                $data['ser_gender']     = $request->user_gender;  
                $data['ser_birthday']   = $request->user_birtahdate;  
                $data['ser_nid']        = $request->user_nid;  
                $data['ser_identity']   = $request->user_identity;  
                $data['ser_joining_date']= date('M/D/Y');  
                $data['ser_password']   = md5(str_random(6)); 
                $data['remember_token'] = md5(str_random(6)); 
                $table = 'bdc_sergeants';  
            } 
    	$output =  ProfileModel::new_user_role_insert($data,$table); 
		return Redirect("/bdcmsadmin")->with('msg', 'Profile Update Successfully!');
    }



    // public static function select_single_profile_info($id,$role){ 
    //     return SelectModel::select_single_profile_info($id,$role);
    // }


    public function Staff_List(){ 
        $usersdata      = ProfileModel::select_users_role_profile();
        $zilausersdata  = ProfileModel::select_zilausers_role_profile();
        $upazila        = ProfileModel::select_upazila_role_profile();
        $sergents       = ProfileModel::select_sergents_role_profile(); 
    	$statement = view('admin/staff_list')
    		->with('staff_info',$usersdata)->with('zilausersdata',$zilausersdata)->with('upazila',$upazila)->with('sergents',$sergents); 
    	return view('master.admin_layout')
    		->with('admin/staff_list',$statement); 
    }

    public function Staff_Single($id,$role){ 
        // $table = mymodel::Find_out_table_by_role($role);
        switch ($role) {
            case '1':
                $data = ProfileModel::Select_admin_info_byId($id); 

                $statement = view('admin.single.admin_single')->with('staff_info',$data); 
                return view('master/admin_layout')->with(' ',$statement);
            case '4':
                $data = ProfileModel::Select_zilaadmin_info_byId($id);
                $role = ProfileModel::find_role_name($data->zil_rol); 
                $statement = view('admin.single.zilla_admin_single')->with('staff_info',$data)->with('role',$role); 
                return view('master/admin_layout')->with(' ',$statement); 
            case '5':
                $data = ProfileModel::Select_upazila_admin_info_byId($id);
                $role = ProfileModel::find_role_name($data->uzl_rol); 
                $statement = view('admin.single.upazila_admin_single')->with('staff_info',$data)->with('role',$role); 
                return view('master/admin_layout')->with(' ',$statement);
            case '6':
                $data = ProfileModel::Select_sergeant_info_byId($id); 
                $role = ProfileModel::find_role_name($data->ser_role); 
                $statement = view('admin.single.sergeant_single')->with('staff_info',$data)->with('role',$role); 
                return view('master/admin_layout')->with(' ',$statement);
        }

    	$statement = view('admin/staff_single')->with('staff_info',$data); 
    	return view('master.admin_layout')->with('admin/staff_single',$statement); 
    }

    public function Staff_Delete($id){
    	$data = DB::table('users')->where('id',$id)->first();
    	//unlink($data->user_profile_pic);
    	$action = DB::table('users')
    		->where('id',$id)
    		->delete();
    		$this->_flash_Message($action,'User Profile Delete Successfully.','User Profile Delete Faild.');
    		return Redirect('/Staff_List');
    }

    public function Driver_List(){
        $data = SelectModel::driver_list_out();  
        $statement = view('admin/user_list')->with('user_info',$data); 
        return view('master.admin_layout')->with('admin/user_list',$statement);
    }

    public function Owner_List(){
        $data = SelectModel::Owner_list_out(); 
        $statement = view('admin/user_list')->with('owner_info',$data); 
        return view('master.admin_layout')->with('admin/user_list',$statement);
    }

    public function check_identity(){
        $identity  = $_GET['identity'];
        $result = Existing::check_sergeant_identity( $identity);
        if($result!=0){
            echo '1'; //already exists
        }else{
            echo '0';
        }
    }

    public function check_user_nid(){
        $user_nid   = $_GET['user_nid'];
        $opts       = $_GET['opts'];
        $result = Existing::check_user_nid_user_nid( $user_nid,$opts);
        if($result!=0){
            echo '1'; //already exists
        }else{
            echo '0';
        }
    }

    public function check_user_email(){
        $user_email     = $_GET['user_email'];
        $opts           = $_GET['opts'];
        $result = Existing::check_user_email_($user_email,$opts);
        if($result!=0){
            echo '1'; //already exists
        }else{
            echo '0';
        }
    }

    public function check_user_number(){
        $user_number   = $_GET['user_number'];
        $opts       = $_GET['opts'];
        $result = Existing::check_user_number_($user_number,$opts);
        if($result!=0){
            echo '1'; //already exists
        }else{
            echo '0';
        }
    }
 
    // Zilla Admin function start
    public function  zila_new_Profile(){
        return view('subadmin/open_Profile');
    }
    public function zila_profile_list(){
        // $usersdata      = ProfileModel::select_users_role_profile();
        // $zilausersdata  = ProfileModel::select_zilausers_role_profile();
        $area=Session::get('user_posting'); 
        $upazila        = ProfileModel::select_upazila_role_profile_($area);
        $sergents       = ProfileModel::select_sergents_role_profile_($area); 
        $statement = view('subadmin/staff_list')->with('upazila',$upazila)->with('sergents',$sergents); 
        return view('master.admin_layout') ->with('subadmin/staff_list',$statement); 
    }
    public function zila_driver(){
        $area=Session::get('user_posting'); 
        $data = SelectModel::zila_driver_list_out($area);  
        $statement = view('admin/user_list')->with('user_info',$data); 
        return view('master.admin_layout')->with('admin/user_list',$statement);
    }

    public function zila_owner(){
        $area=Session::get('user_posting');
        $data = SelectModel::zila_Owner_list_out($area);  
        $statement = view('admin/user_list')->with('owner_info',$data); 
        return view('master.admin_layout')->with('admin/user_list',$statement);
    }













    // private function _flash_Message($action, $message, $faield){
    //     if($action){
    //         Session::put('message', $message);
    //         Session::put('class','alert alert-success');
    //     }else{
    //         Session::put('message', $faield);
    //         Session::put('class','alert alert-error');
    //     } 
    // }
}//Class Exit
