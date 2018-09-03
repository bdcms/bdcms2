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
				{{-- <img   src="@if($staff_info->user_profile_pic !=NULL) 
						{{URL::to("/public/Frontend/$staff_info->user_profile_pic")}} @else {{URL::to("/public/Frontend/images/profile_img.jpg")}} @endif"> 
                  <h6>{{$staff_info->user_name}}</h6>  
                  <h6>{{$staff_info->user_posting}}</h6>  
                  <h6>{{$staff_info->role_id}}</h6>   --}}
               
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
	                  <td>Address:</td>
	                  <td>{{strip_tags($staff_info->user_address)}}</td> 
	                </tr>
	                <tr>
	                  <td>Driving Lisence No:</td>
	                  <td>{{$staff_info->user_lisence}}</td> 
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
	                  <td>Email:</td>
	                  <td>{{$staff_info->user_email}}</td> 
	                </tr>
	                <tr>
	                  <td>Passport Number:</td>
	                  <td>{{$staff_info->user_passport}}</td> 
	                </tr>
	                 
	              </tbody>
	            </table>           
		</div>
	</div><!--/span-->

</div><!--/row-->

	{{--  <div class="row-fluid sortable">
	<div class="box span6">
		<div class="box-header">
			<h2><i class="halflings-icon align-justify"></i><span class="break"></span>Case With Draw History</h2>
			<div class="box-icon">
				<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
				<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
				<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
			</div>
		</div>
		<div class="box-content">
			<table class="table">
				  <thead>
					  <tr>
						  <th>Owner Name</th>
						  <th>Area</th>
						  <th>Car Number</th>
						  <th>withdraw date</th>                                          
					  </tr>
				  </thead>   
				  <tbody>
					<tr>
						<td><a href="owner_single.html">Dennis Ji</a></td>
						<td class="center">Khulna</td>                                       
						<td class="center"><a href="car_details.html"><a href="car_details.html">Khulna GHA 12-3456</a></a></td>                                       
						<td class="center">2012/01/01</td>
					</tr>
					<tr>
						<td><a href="owner_single.html">Dennis Ji</a></td>
						<td class="center">Khulna</td>                                       
						<td class="center"><a href="car_details.html">Khulna GHA 12-3456</a></td>                                       
						<td class="center">2012/01/01</td>
					</tr>
					<tr>
						<td><a href="owner_single.html">Dennis Ji</a></td>
						<td class="center">Khulna</td>                                       
						<td class="center"><a href="car_details.html">Khulna GHA 12-3456</a></td>                                       
						<td class="center">2012/01/01</td>
					</tr>
					<tr>
						<td><a href="owner_single.html">Dennis Ji</a></td>
						<td class="center">Khulna</td>                                       
						<td class="center"><a href="car_details.html">Khulna GHA 12-3456</a></td>                                       
						<td class="center">2012/01/01</td>
					</tr>
					<tr>
						<td><a href="owner_single.html">Dennis Ji</a></td>
						<td class="center">Khulna</td>                                       
						<td class="center"><a href="car_details.html">Khulna GHA 12-3456</a></td>                                       
						<td class="center">2012/01/01</td>
					</tr>                                   
				  </tbody>
			 </table>  
			 <div class="pagination pagination-centered">
			  <ul>
				<li><a href="#">Prev</a></li>
				<li class="active">
				  <a href="#">1</a>
				</li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li><a href="#">Next</a></li>
			  </ul>
			</div>     
		</div>
	</div><!--/span-->
	<div class="box span6">
		<div class="box-header">
			<h2><i class="halflings-icon align-justify"></i><span class="break"></span>Case Pending History</h2>
			<div class="box-icon">
				<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
				<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
				<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
			</div>
		</div>
		<div class="box-content">
			<table class="table">
				  <thead>
					  <tr>
						  <th>Owner Name</th>
						  <th>Area</th>
						  <th>Car Number</th>
						  <th>withdraw date</th>                                          
					  </tr>
				  </thead>   
				  <tbody>
					<tr>
						<td><a href="owner_single.html">Dennis Ji</a></td>
						<td class="center">Khulna</td>                                       
						<td class="center"><a href="car_details.html">Khulna GHA 12-3456</a></td>                                       
						<td class="center">2012/01/01</td>
					</tr>
					<tr>
						<td><a href="owner_single.html">Dennis Ji</a></td>
						<td class="center">Khulna</td>                                       
						<td class="center"><a href="car_details.html">Khulna GHA 12-3456</a></td>                                       
						<td class="center">2012/01/01</td>
					</tr>
					<tr>
						<td><a href="owner_single.html">Dennis Ji</a></td>
						<td class="center">Khulna</td>                                       
						<td class="center"><a href="car_details.html">Khulna GHA 12-3456</a></td>                                       
						<td class="center">2012/01/01</td>
					</tr>
					<tr>
						<td><a href="owner_single.html">Dennis Ji</a></td>
						<td class="center">Khulna</td>                                       
						<td class="center"><a href="car_details.html">Khulna GHA 12-3456</a></td>                                       
						<td class="center">2012/01/01</td>
					</tr>
					<tr>
						<td><a href="owner_single.html">Dennis Ji</a></td>
						<td class="center">Khulna</td>                                       
						<td class="center"><a href="car_details.html">Khulna GHA 12-3456</a></td>                                       
						<td class="center">2012/01/01</td>
					</tr>                                   
				  </tbody>
			 </table>  
			 <div class="pagination pagination-centered">
			  <ul>
				<li><a href="#">Prev</a></li>
				<li class="active">
				  <a href="#">1</a>
				</li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li><a href="#">Next</a></li>
			  </ul>
			</div>     
		</div>
	</div><!--/span--> --}}
	
	 
</div><!--/row-->
@endsection