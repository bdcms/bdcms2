<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MetroRequest;
use App\Http\Requests\KeywordRequest;
use DB; 
use Session;
use Redirect;
use App\SelectModel;
use App\DeleteModel;
use App\SubAdminModel;
use App\Existing;
class DefaultAdminController extends Controller
{
    //
    public function car_metro(){
    	$data = SelectModel::select_all_metro(); 
    	$keyword = SelectModel::select_all_metro_keyword(); 
    	$statement = view('admin/add_metro')->with('metros',$data)->with('keywords',$keyword); 
    	return view('master.admin_layout')->with('admin/add_metro',$statement); 
    }

    public function add_metro(MetroRequest $request){  
    	$data=[
    		'metro_name'=>trim($request->metro_name),
    		'metro_desc'=>trim($request->metor_desc)
    	]; 
    	$result = DB::table('bdc_metros')->insert($data); 
    	if($result){
    		return redirect('car_metro')->with('msg',"Car Metro Add successfull!");
    	}
    }



    public function metro_delete($id){
    	$table="bdc_metros";
    	$con="metro_id";
    	$result = DeleteModel::default_delete_function($id,$table,$con);
    	if($result){
    		return redirect('car_metro')->with('msg',"Car Metro Add successfull!");
    	}
    }

    public function keyword_delete($id){
    	$table="bdc_keywords";
    	$con="key_id";
    	$result = DeleteModel::default_delete_function($id,$table,$con);
    	if($result){
    		return redirect('car_metro')->with('msg',"Keyword Delete successfull!");
    	}
    }


    

    public function check_add_metro_name(){
		$metro_name 	= $_GET['metro_name'];
		$result = Existing::check_metro_name_check($metro_name);
		if($result!=0){
			echo '1'; //already exists
		}else{
			echo '0';
		}
	}

	public function add_keyword(KeywordRequest $request){  
    	$data=[
    		'key_name'=>trim($request->keyword_name),
    		'key_desc'=>trim($request->keyword_desc)
    	]; 
    	$result = DB::table('bdc_keywords')->insert($data); 
    	if($result){
    		return redirect('car_metro')->with('msg',"Metro Keyword Add successfull!");
    	}
    }
     

    public function check_add_keyword_name(){
		$keyword_name 	= $_GET['keyword_name'];
		$result = Existing::check_keyword_name_check($keyword_name);
		if($result!=0){
			echo '1'; //already exists
		}else{
			echo '0';
		}
	}

    public function check_car_metro_exists(){
        $car_metro   = $_GET['car_metro'];
        $result = Existing::check_car_metro_check($car_metro);
        if($result!=0){
            echo '1'; //already exists
        }else{
            echo '0';
        }
    }

    public function check_keyword_exists(){
        $keyword   = $_GET['keyword'];
        $result = Existing::check_keyword_check($keyword);
        if($result!=0){
            echo '1'; //already exists
        }else{
            echo '0';
        }
    }








}
