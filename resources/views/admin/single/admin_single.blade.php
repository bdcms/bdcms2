@extends('master/admin_layout')
@section('content')
<?php if($msg = Session::get('message')): $class = Session::get('class'); if($class=='alert alert-success'){$snap='Well done! ';}else{$snap='Oh snap! ';}?> 
 	<div class="{{$class}} success_alrt_msg">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>{{$snap}}</strong> {{$msg}}
	</div> 
<?php Session::put('message',null); endif; ?>
<ul class="breadcrumb">
	<li>
		<i class="icon-home"></i>
		<a href="index.html">Home</a> 
		<i class="icon-angle-right"></i>
	</li>
	<li><a href="#">Official Staff Profile</a></li>
</ul>

<div class="row-fluid sortable">		
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>
			<div class="box-icon">
				<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
				<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
				<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
			</div>
		</div>
		<div class="box-content">
			<div class="profile_image">
				<img   src="@if($staff_info->user_picture !=NULL) 
						{{URL::to("/public/Frontend/$staff_info->user_picture")}} @else {{URL::to("/public/Frontend/images/profile_img.jpg")}} @endif"> 
                  <h6>{{$staff_info->user_name}}</h6>   
               
			</div>
			<table class="table table-striped"> 
	              <tbody> 
	                <tr>
	                  <td>Name:</td>
	                  <td>{{$staff_info->user_name}}</td> 
	                </tr>
	                <tr>
	                  <td>Father Name:</td>
	                  <td>{{$staff_info->user_fname}}</td> 
	                </tr> 
	                <tr>
	                  <td>Email:</td>
	                  <td>{{$staff_info->user_email}}</td> 
	                </tr> 
	                <tr>
	                  <td>Address:</td>
	                  <td>{{strip_tags($staff_info->user_address)}}</td> 
	                </tr>
	                 
	                <tr>
	                  <td>National ID Number:</td>
	                  <td>{{$staff_info->user_nid}}</td> 
	                </tr>
	                <tr>
	                  <td>Contact Number:</td>
	                  <td>{{$staff_info->user_mobile}}</td> 
	                </tr>
	                <tr>
	                  <td>Date of Birth:</td>
	                  <td>{{$staff_info->user_birthday}}</td> 
	                </tr>
	                <tr>
	                  <td>Gender:</td>
	                  <td>@if($staff_info->user_gender==1) Male @else Female @endif</td> 
	                </tr>
	                
	                <tr>
	                  <td>Service Start:</td>
	                  <td>{{$staff_info->user_joining_date}}</td> 
	                </tr>
	                 
	              </tbody>
	            </table>           
		</div>
	</div><!--/span-->

</div><!--/row-->

 
	
	 
</div><!--/row-->
@endsection