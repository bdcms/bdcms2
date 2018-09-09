<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB; 
use Session;
use App\ProfileModel;
use App\SelectModel;
use App\Existing;
use App\mymodel;
use Redirect;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        return view('homfe');
    }
}
