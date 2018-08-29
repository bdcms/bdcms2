<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',					'FrontController@home');
Route::get('/ownerinfo',		'FrontController@signup');
Route::get('/carinfo',			'FrontController@signup1');
Route::get('/cardocument',		'FrontController@signup2');
Route::get('/login',			'FrontController@login');
Route::get('/driverSignup',		'FrontController@driverSignup');


//Admin Login
Route::get('/admin',					'BackendController@admin_login');

//PDF
Route::get('/makePDF',			'PdfController@makePDF');
Route::post('/Print_Report',	'PdfController@Print_Report');
Route::post('/owner_Report',	'PdfController@owner_Report');
Route::post('/Driver_Report',	'PdfController@Driver_Report');


Route::any('/appfrom1/',		'FrontController@appfrom1');
Route::any('/appfrom2/',		'FrontController@appfrom2');
Route::post('/appfrom3/',		'FrontController@appfrom3');
Route::post('/checkLogin/',		'FrontController@checkLogin');
Route::post('/driSingup/',		'FrontController@driSingup'); 
Route::any('/area_search/',		'FrontController@district');
Route::any('/key_search/',		'FrontController@keyword');


Route::get('/hello',			'FrontController@xxx');

//CAR INFORMATION SEARCHING
Route::post('/Search_Car',		'CarSearchingController@CarInformation'); 
Route::get('/Search_Fount',		'CarSearchingController@Search_Fount'); 
Route::any('/case_submit',		'CarSearchingController@case_submit');



//BACKEND ROUTING START ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Dash board 
Route::get('/bdcmsadmin', 				  'BackendController@index');
Route::get('/NewApplication',			  'ApplicationController@NewApplication');
Route::get('/Approved_Application',		  'ApplicationController@Approved_Application');
Route::get('/ApplicationSingle/{id}',	  'ApplicationController@Application_Single');
Route::post('/Application_Approved/{id}', 'ApplicationController@Application_Approved');
Route::post('/Application_Reject/{id}',	  'ApplicationController@Application_Reject');
Route::get('/Application_Delete/{id}',    'ApplicationController@Application_Delete'); 

//New Profile Open Related Controller\
Route::get('/New_Profile',			'ProfileController@New_Profile'); 
Route::post('/OpeningNewProfile',	'ProfileController@Opening_NewProfile'); 
Route::get('/Staff_List',			'ProfileController@Staff_List'); 
Route::get('/Staff_Single/{id}',	'ProfileController@Staff_Single'); 
Route::get('/Staff_Delete/{id}',	'ProfileController@Staff_Delete'); 
//DRIVER INFORMATION
Route::get('/Driver_list',		'ProfileController@Driver_List');
Route::get('/Owner_List',		'ProfileController@Owner_List'); 
//DEFAULT CONTROLLER
Route::get('/Help',				'HelpController@index');  
//
Route::get('/Cars_Information', 'CarsDetailsController@index');
//Login route
Route::post('/User_Login',		'LoginController@User_Login');
Route::get('/User_Logout',		'LoginController@User_Logout'); 
//Case Related Routing
Route::get('/WithDrawCase',		'CaseController@WithDrawCase');
Route::get('/PendingCase',		'CaseController@PendingCase');
Route::get('/Case_Single/{id}', 'CaseController@case_single');

//Ajax all URL ROUTING 
Route::get('check_mer_email',   'FrontController@check_mer_email');
Route::get('check_nid_no',      'FrontController@check_nid_no');
Route::get('check_car_umber',   'FrontController@check_car_umber'); 
Route::get('check_chassis_no',  'FrontController@check_chassis_no');
Route::get('check_engine_no',   'FrontController@check_engine_no');
Route::get('check_insurence_no','FrontController@check_insurence_no');
Route::get('check_licence_no',  'FrontController@check_licence_no');
Route::get('check_user_login',  'LoginController@check_user_login'); Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

