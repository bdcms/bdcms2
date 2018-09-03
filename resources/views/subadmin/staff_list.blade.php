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
	 
	<div class="box span12 custom_data_table_box">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon user"></i><span class="break"></span>All of UpaZilla Members List</h2>
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
					  <th>Contact</th>
					  <th>Working Area</th>
					  <th>Photo</th>
					  <th>status</th>
					  <th>Actions</th>
				  </tr>
			  </thead>   
			  <tbody>

			  	@foreach($upazila as $value)
				<tr>
					<td>{{$value->uzl_name}}</td>
					<td class="center">{{$value->uzl_email}}</td> 
					<td class="center">{{$value->uzl_mobile}}</td>
					<td class="center">{{$value->uzl_working_area}}</td>
					<td class="center">
						<img style="height: 100px;width: 100px;" src="@if($value->uzl_picture !=NULL) 
						{{URL::to("/public/Frontend/$value->uzl_picture")}} @else {{URL::to("/public/Frontend/images/profile_img.jpg")}} @endif">
					</td>
					<td>
						@if($value->pub_status==1)
						<a href="#"><span class="label label-success">Activve</span></a>
						@else
						<a href="#"><span class="label label-important">DeActive</span></a>
						@endif
					</td>
					<td class="center">
						<a class="btn btn-success" href="{{URL::to("/Staff_Single/$value->uzl_id/$value->uzl_rol")}}">
							<i class="halflings-icon white zoom-in"></i>  
						</a>
						 
						<a class="btn btn-danger" id="Delete" href="{{URL::to("/Staff_Delete/$value->uzl_id/$value->uzl_rol")}}">
							<i class="halflings-icon white trash"></i> 
						</a>
					</td>
				</tr> 
				@endforeach

				 

				 
			  </tbody>
		  </table>            
		</div>
	</div><!--/span All of Upazila  workers list-->
	<div class="box span12 custom_data_table_box">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon user"></i><span class="break"></span>All of Police Sergeant's Members List</h2>
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
					  <th>Contact</th>
					  <th>Identity</th>
					  <th>Working Area</th>
					  <th>Photo</th>
					  <th>Status</th>
					  <th>Actions</th>
				  </tr>
			  </thead>   
			  <tbody>

			  	@foreach($sergents as $value)
				<tr>
					<td>{{$value->ser_name}}</td>
					<td class="center">{{$value->ser_email}}</td> 
					<td class="center">{{$value->ser_mobile}}</td>
					<td class="center">{{$value->ser_identity}}</td>
					<td class="center">{{$value->ser_working_area}}</td>
					<td class="center">
						<img style="height: 100px;width: 100px;" src="@if($value->ser_profile_pic !=NULL) 
						{{URL::to("/public/Frontend/$value->ser_profile_pic")}} @else {{URL::to("/public/Frontend/images/profile_img.jpg")}} @endif">
					</td>
					<td>
						@if($value->pub_status==1)
						<a href="#"><span class="label label-success">Activve</span></a>
						@else
						<a href="#"><span class="label label-important">DeActive</span></a>
						@endif
					</td>
					<td class="center">
						<a class="btn btn-success" href="{{URL::to("/Staff_Single/$value->ser_id/$value->ser_role")}}">
							<i class="halflings-icon white zoom-in"></i>  
						</a> 
						<a class="btn btn-danger" id="Delete" href="{{URL::to("/Staff_Delete/$value->ser_id/$value->ser_role")}}">
							<i class="halflings-icon white trash"></i> 
						</a>
					</td>
				</tr> 
				@endforeach

				 

				 
			  </tbody>
		  </table>            
		</div>
	</div><!--/span All of Upazila  workers list-->

	</div><!--/row-->
@endsection