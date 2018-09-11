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

Route::get('/',								'FrontController@home');
Route::get('/ownerinfo',					'FrontController@signup');
Route::get('/carinfo',						'FrontController@signup1');
Route::get('/cardocument',					'FrontController@signup2'); 
Route::get('/driverSignup',					'FrontController@driverSignup'); 
//Admin Login
Route::get('/admin',						'BackendController@admin_login'); 
//PDF
Route::get('/makePDF',						'PdfController@makePDF');
Route::post('/Print_Report',				'PdfController@Print_Report');
Route::post('/owner_Report',				'PdfController@owner_Report');
Route::post('/Driver_Report',				'PdfController@Driver_Report'); 
//Front page application submit
Route::any('/appfrom1/',					'FrontController@appfrom1');
Route::any('/appfrom2/',					'FrontController@appfrom2');
Route::post('/appfrom3/',					'FrontController@appfrom3');
Route::post('/checkLogin/',					'FrontController@checkLogin');
Route::post('/driSingup/',					'FrontController@driSingup'); 
Route::any('/area_search/',					'FrontController@district');
Route::any('/key_search/',					'FrontController@keyword'); 
Route::get('/hello',						'FrontController@xxx'); 
//CAR INFORMATION SEARCHING
Route::post('/Search_Car',					'CarSearchingController@CarInformation'); 
Route::get('/Search_Fount',					'CarSearchingController@Search_Fount'); 
Route::any('/case_submit',					'CarSearchingController@case_submit');
Route::get('/Search_out',					'CarSearchingController@Search_out'); 
//BACKEND ROUTING START ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Dash board 
Route::get('/bdcmsadmin', 				  	'BackendController@index');
Route::get('/NewApplication',			  	'ApplicationController@NewApplication');
Route::get('/Approved_Application',		  	'ApplicationController@Approved_Application');
Route::get('/ApplicationSingle/{id}',	  	'ApplicationController@Application_Single');
Route::post('/Application_Approved/{id}', 	'ApplicationController@Application_Approved');
Route::post('/Application_Reject/{id}',	  	'ApplicationController@Application_Reject');
Route::get('/Application_Delete/{id}',    	'ApplicationController@Application_Delete');  
//New Profile Open Related Controller\
Route::get('/New_Profile',					'ProfileController@New_Profile'); 
Route::post('/newrole',						'ProfileController@newrole'); 
Route::get('/Staff_List',					'ProfileController@Staff_List'); 
Route::get('/Staff_Single/{id}/{role}',		'ProfileController@Staff_Single'); 
Route::get('/Staff_Delete/{id}',			'ProfileController@Staff_Delete'); 
//DRIVER INFORMATION
Route::get('/Driver_list',					'ProfileController@Driver_List');
Route::get('/Owner_List',					'ProfileController@Owner_List'); 
//DEFAULT CONTROLLER
Route::get('/Help',							'HelpController@index');  
//
Route::get('/Cars_Information', 			'CarsDetailsController@index');
//Login route
Route::get('/user_login',					'FrontController@login');
Route::post('/User_Login',					'LoginController@User_Login');
Route::get('/User_Logout',					'LoginController@User_Logout'); 
//Case Related Routing
Route::get('/WithDrawCase',					'CaseController@WithDrawCase');
Route::get('/PendingCase',					'CaseController@PendingCase');
Route::get('/Case_Single/{id}', 			'CaseController@case_single');
			
Route::get('/car_metro', 					'DefaultAdminController@car_metro');
Route::post('/add_metro', 					'DefaultAdminController@add_metro');
Route::get('/metro_delete/{id}',			'DefaultAdminController@metro_delete');
Route::post('/add_keyword', 				'DefaultAdminController@add_keyword');
Route::get('/keyword_delete/{id}',			'DefaultAdminController@keyword_delete');
Route::get('/admin_notice',					'BackendController@admin_notice');
Route::post('/create_notice',				'BackendController@create_notice');  
// Site Zilla Admin routing start
Route::get('subadmin',						'SubAdminController@index');
Route::get('/new_app_zilla',				'ApplicationController@new_app_zilla');
Route::get('/zillaApp',			  			'ApplicationController@zillaApp');
Route::get('/aprove_zila_app',			  	'ApplicationController@aprove_zila_app');
Route::get('/zila-new-Profile',			  	'ProfileController@zila_new_Profile');
Route::get('/zila-profile-list',			'ProfileController@zila_profile_list');
Route::get('/zila_driver',					'ProfileController@zila_driver');
Route::get('/zila_owner',					'ProfileController@zila_owner');
Route::get('/zilla_notice',					'BackendController@zilla_notice');
Route::post('/zilla_notice_submit',			'BackendController@zilla_notice_submit');
Route::get('/WithDraw_Case',				'CaseController@WithDraw_Case');
Route::get('/Pending_Case',					'CaseController@Pending_Case'); 
//Site Upazilla Admin Routeing start
Route::get('third_admin',					'UpazilaController@index');
Route::get('upazila_WithDraw_Case',			'CaseController@upazila_WithDraw_Case');
Route::get('upazila_pending_Case',			'CaseController@upazila_pending_Case');
Route::get('upazila_setting/{id}',			'UpazilaController@upazila_setting');
Route::post('upazila_setting_update',		'UpazilaController@upazila_setting_update');
Route::post('/case_with_draw', 				'CaseController@case_with_draw');
Route::post('/upazila_car_search', 			'CaseController@upazila_car_search'); 
//Ajax all URL ROUTING 
Route::get('check_mer_email',   			'FrontController@check_mer_email');
Route::get('check_nid_no',      			'FrontController@check_nid_no');
Route::get('check_car_umber',   			'FrontController@check_car_umber'); 
Route::get('check_chassis_no',  			'FrontController@check_chassis_no');
Route::get('check_engine_no',   			'FrontController@check_engine_no');
Route::get('check_insurence_no',			'FrontController@check_insurence_no');
Route::get('check_licence_no',  			'FrontController@check_licence_no');
Route::get('check_user_login',  			'LoginController@check_user_login');
Route::get('check_identity',  				'ProfileController@check_identity');
Route::get('check_user_nid',  				'ProfileController@check_user_nid');
Route::get('check_user_email',  			'ProfileController@check_user_email');
Route::get('check_user_number',  			'ProfileController@check_user_number');
Route::get('check_add_metro_name',			'DefaultAdminController@check_add_metro_name');
Route::get('check_add_keyword_name',		'DefaultAdminController@check_add_keyword_name'); 
Route::get('check_car_metro_exists',		'DefaultAdminController@check_car_metro_exists'); 
Route::get('check_keyword_exists',			'DefaultAdminController@check_keyword_exists');  
// FrontEnd site Routing 
//All of Controller about Driver
Route::get('/driver-profile', 				'DriverController@index');
Route::get('/driver-setting/{id}', 			'DriverController@driver_setting');
Route::post('/driver_info_update',			'DriverController@driver_info_update'); 
//All of Controller for Ownder Routing
Route::get('/owner-profile', 				'OwnerController@index');
Route::get('/owner-setting/{id}', 			'OwnerController@owner_setting');
Route::post('/owner_info_update', 			'OwnerController@owner_info_update');
//All of Controller for Ownder Routing
Route::get('/sergeant-profile', 			'SergeantController@index');
Route::get('/sergeant-setting/{id}', 		'SergeantController@sergeant_setting');
Route::post('/sergeant_info_update', 		'SergeantController@sergeant_info_update');




