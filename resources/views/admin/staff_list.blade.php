@extends('master.admin_layout')
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
	<li><a href="#">Tables</a></li>
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
			<table class="table table-striped table-bordered bootstrap-datatable datatable">
			  <thead>
				  <tr>
					  <th>Name</th>
					  <th>Email</th>
					  <th>Role</th>
					  <th>Contact</th>
					  <th>Working Area</th>
					  <th>Photo</th>
					  <th>Actions</th>
				  </tr>
			  </thead>   
			  <tbody>

			  	@foreach($staff_info as $value)
				<tr>
					<td>{{$value->user_name}}</td>
					<td class="center">{{$value->user_email}}</td>
					<td class="center">{{$value->role_id}}</td>
					<td class="center">{{$value->user_mobile}}</td>
					<td class="center">{{$value->user_posting}}</td>
					<td class="center">
						<img style="height: 100px;width: 100px;" src="@if($value->user_profile_pic !=NULL) 
						{{URL::to("/public/Frontend/$value->user_profile_pic")}} @else {{URL::to("/public/Frontend/images/profile_img.jpg")}} @endif">
					</td>
					<td class="center">
						<a class="btn btn-success" href="{{URL::to("/Staff_Single/$value->id")}}">
							<i class="halflings-icon white zoom-in"></i>  
						</a>
						<a class="btn btn-info" href="#">
							<i class="halflings-icon white edit"></i>  
						</a>
						<a class="btn btn-danger" id="Delete" href="{{URL::to("/Staff_Delete/$value->id")}}">
							<i class="halflings-icon white trash"></i> 
						</a>
					</td>
				</tr> 
				@endforeach

				 

				 
			  </tbody>
		  </table>            
		</div>
	</div><!--/span-->

	</div><!--/row-->
@endsection