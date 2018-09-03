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
			<h2><i class="halflings-icon user"></i><span class="break"></span>All of System Workers Members List</h2>
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
					  <th>Actions</th>
				  </tr>
			  </thead>   
			  <tbody>

			  	@foreach($staff_info as $value)
				<tr>
					<td>{{$value->user_name}}</td>
					<td class="center">{{$value->user_email}}</td> 
					<td class="center">{{$value->user_mobile}}</td>
					<td class="center">{{$value->user_address}}</td>
					<td class="center">
						<img style="height: 100px;width: 100px;" src="@if($value->user_picture !=NULL) 
						{{URL::to("/public/Frontend/$value->user_picture")}} @else {{URL::to("/public/Frontend/images/profile_img.jpg")}} @endif">
					</td>
					<td class="center">
						<a class="btn btn-success" href="{{URL::to("/Staff_Single/$value->user_id/$value->user_rol")}}">
							<i class="halflings-icon white zoom-in"></i>  
						</a>
						<a class="btn btn-info" href="#">
							<i class="halflings-icon white edit"></i>  
						</a>
						<a class="btn btn-danger" id="Delete" href="{{URL::to("/Staff_Delete/$value->user_id")}}">
							<i class="halflings-icon white trash"></i> 
						</a>
					</td>
				</tr> 
				@endforeach

				 

				 
			  </tbody>
		  </table>            
		</div>
	</div><!--/span--><!--Site Admin User List-->
	<div class="box span12 custom_data_table_box">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon user"></i><span class="break"></span>All of Zilla Members List</h2>
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
					  <th>Actions</th>
				  </tr>
			  </thead>   
			  <tbody>

			  	@foreach($zilausersdata as $value)
				<tr>
					<td>{{$value->zil_name}}</td>
					<td class="center">{{$value->zil_email}}</td> 
					<td class="center">{{$value->zil_mobile}}</td>
					<td class="center">{{$value->zil_working_area}}</td>
					<td class="center">
						<img style="height: 100px;width: 100px;" src="@if($value->zil_picture !=NULL) 
						{{URL::to("/public/Frontend/$value->zil_picture")}} @else {{URL::to("/public/Frontend/images/profile_img.jpg")}} @endif">
					</td>
					<td class="center">
						<a class="btn btn-success" href="{{URL::to("/Staff_Single/$value->zil_id/$value->zil_rol")}}">
							<i class="halflings-icon white zoom-in"></i>  
						</a>
						<a class="btn btn-info" href="#">
							<i class="halflings-icon white edit"></i>  
						</a>
						<a class="btn btn-danger" id="Delete" href="{{URL::to("/Staff_Delete/$value->zil_id/$value->zil_rol")}}">
							<i class="halflings-icon white trash"></i> 
						</a>
					</td>
				</tr> 
				@endforeach

				 

				 
			  </tbody>
		  </table>            
		</div>
	</div><!--/span All of Zilla workers list-->
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
					<td class="center">
						<a class="btn btn-success" href="{{URL::to("/Staff_Single/$value->uzl_id/$value->uzl_rol")}}">
							<i class="halflings-icon white zoom-in"></i>  
						</a>
						<a class="btn btn-info" href="#">
							<i class="halflings-icon white edit"></i>  
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
					<td class="center">
						<a class="btn btn-success" href="{{URL::to("/Staff_Single/$value->ser_id/$value->ser_role")}}">
							<i class="halflings-icon white zoom-in"></i>  
						</a>
						<a class="btn btn-info" href="#">
							<i class="halflings-icon white edit"></i>  
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