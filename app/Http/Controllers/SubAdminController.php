<?php

namespace App\Http\Controllers;

use App\SubAdminModel;
use Illuminate\Http\Request;
use DB;
use Session;
use input;
use validator;
use view;
use Redirect;   
session_start();
class SubAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        // $id=Session::get('user_id');
        // $role_id=Session::get('role_id');
        // if(empty($id)==true and empty($role_id)==true){
        //     return Redirect::to("/user_login");
        // }else{ 
        return view('subadmin/index');
        // }
        // $statement = view('subadmin.index'); 
        // return view('master.admin_layout')
        //     ->with('subadmin/index',$statement); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SubAdminModel  $subAdminModel
     * @return \Illuminate\Http\Response
     */
    public function show(SubAdminModel $subAdminModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SubAdminModel  $subAdminModel
     * @return \Illuminate\Http\Response
     */
    public function edit(SubAdminModel $subAdminModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SubAdminModel  $subAdminModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubAdminModel $subAdminModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SubAdminModel  $subAdminModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubAdminModel $subAdminModel)
    {
        //
    }
}
