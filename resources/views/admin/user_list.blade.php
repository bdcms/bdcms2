@extends('master.admin_layout')
@section('content')
<?php if($msg = Session::get('message')): $class = Session::get('class'); if($class=='alert alert-success'){$snap='Well done! ';}else{$snap='Oh snap! ';}?> 
 	<div class="{{$class}} success_alrt_msg">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>{{$snap}}</strong> {{$msg}}
	</div> 
<?php Session::put('message',null); endif; ?>
@if(isset($user_info))
<ul class="breadcrumb">
	<li>
		<i class="icon-home"></i>
		<a href="index.html">Home</a> 
		<i class="icon-angle-right"></i>
	</li>
	<li> 
		<a href="index.html">User information</a> 
		<i class="icon-angle-right"></i>
	</li>
	<li><a href="#">Driver information</a></li>
	</ul>

	<div class="row-fluid sortable">		
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon user"></i><span class="break"></span>Driver Information</h2>
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
					  <th>Driving Lisence</th>
					  <th>Car Number</th> 
					  <th>Photo</th>
					  <th>Status</th>
					  <th>Actions</th>
				  </tr>
			  </thead>   
			  <tbody>

			  	@foreach($user_info as $value) 
				<tr>
					<td>{{$value->dri_name}}</td>
					<td class="center">{{$value->dri_email}}</td>
					<td class="center">{{$value->dri_mobile}}</td>
					<td class="center">{{$value->dri_lisence}}</td> 
					<td class="center">{{$value->car_reg_num}}</td> 
					<td class="center">
						<img style="height: 100px;width: 100px;" src="@if($value->dri_profile_pic !=NULL) 
						{{$value->dri_profile_pic}} @else {{URL::to("/public/Frontend/images/profile_img.jpg")}} @endif">
					</td>
					<td>
						@if($value->pub_status==1)
						<a class="" href="#"><span class="label label-success">Active</span></a>
						@else
	                  	<a class="" href="{{URL::to("/Case_Single/$value->dri_id")}}"><span class="label label-important">DeActive</span></a> 
						@endif
					</td>
					<td class="center">
						<a class="btn btn-success" href="{{URL::to("/Staff_Single/$value->dri_id")}}">
							<i class="halflings-icon white zoom-in"></i>  
						</a> 
						<a class="btn btn-success" href="{{URL::to("/Staff_Single/$value->dri_id")}}">
							<i class="halflings-icon white delete"></i>  
						</a>
					</td>
				</tr> 
				@endforeach

				 

				 
			  </tbody>
		  </table>   
		  <form action="{{URL('/Driver_Report')}}" method="Post" >
		  	{{csrf_field()}}
			<div class="form-actions"> 
				<button type="submit" target="_blank" class="btn btn-primary">Print Report</button> 
			 </div> 
		</form>         
		</div>
	</div><!--/span-->

	</div><!--/row-->
@elseif(isset($owner_info))
<ul class="breadcrumb">
	<li>
		<i class="icon-home"></i>
		<a href="index.html">Home</a> 
		<i class="icon-angle-right"></i>
	</li>
	<li> 
		<a href="index.html">User information</a> 
		<i class="icon-angle-right"></i>
	</li>
	<li><a href="#">Owner Information</a></li>
	</ul>

	<div class="row-fluid sortable">		
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon user"></i><span class="break"></span>Owner Information</h2>
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
					  <th>Contact</th> 
					  <th>Car Number</th> 
					  <th>Photo</th>
					  <th>Actions</th>
				  </tr>
			  </thead>   
			  <tbody>

			  	@foreach($owner_info as $value)
			  		 
				<tr>
					<td>{{$value->won_name}}</td> 
					<td class="center">{{$value->won_mobile}}</td> 
					<td class="center">@if(isset($car_info->car_reg_num)){{$car_info->car_reg_num}}@endif</td> 
					<td class="center">
						<img style="height: 100px;width: 100px;" src="@if($value->won_profile_pic !=NULL) 
						{{$value->won_profile_pic}} @else {{URL::to("/public/Frontend/images/profile_img.jpg")}} @endif">
					</td>
					<td class="center">
						<a class="btn btn-success" href="{{URL::to("/Staff_Single/$value->won_id")}}">
							<i class="halflings-icon white zoom-in"></i>  
						</a>
						<a class="btn btn-info" href="#">
							<i class="halflings-icon white edit"></i>  
						</a>
						<a class="btn btn-danger" id="Delete" href="{{URL::to("/Staff_Delete/$value->won_id")}}">
							<i class="halflings-icon white trash"></i> 
						</a>
					</td>
				</tr> 
				@endforeach

				 

				 
			  </tbody>
		  </table> 
		  <form action="{{URL('/owner_Report')}}" method="POST" >
		  	{{csrf_field()}}
			<div class="form-actions"> 
				<button type="submit" target="_blank" class="btn btn-primary">Print Report</button> 
			 </div> 
		</form>           
		</div>
	</div><!--/span-->

	</div><!--/row-->
@endif
@endsection