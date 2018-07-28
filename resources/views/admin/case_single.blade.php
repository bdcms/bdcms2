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
			 
			<table class="table table-striped table-bordered bootstrap-datatable datatable">
			  <thead>
				  <tr>
					  <th>Owner</th>
					  <th>Car Number</th>
					  <th>Case</th>
					  <th>Area</th> 
					  <th>Driver</th> 
					  <th>Date</th>  
					  <th>Action</th> 
				  </tr>
			  </thead>   
			  <tbody>
			  	<?php  
 					foreach($case_info as $value): 
 						$driver_info=$value->driver_id; 
 						$driver_info=DB::table('users')->where('id',$driver_info)->first();
 						$complaint=$value->complainant_id;
 						$complaint=DB::table('users')->where('id',$complaint)->first();
 						$car_info=$value->car_id;
 						$car_info=DB::table('cars')->where('id',$car_info)->first();

			  	?>
				<tr> 
					<td class="center">@if(isset($value->user_name)){{$value->user_name}}@endif</td>
					<td class="center">@if(isset($car_info->car_reg_num)){{$car_info->car_reg_num}}@endif</td>
					<td class="center">@if(isset($value->case_name)){{$value->case_name}}@endif @if(isset($value->black_list))<span style="color:red;">*</span>@endif</td> 
					<td class="center">@if(isset($value->case_area)){{$value->case_area}}@endif</td>  
					<td class="center">@if(isset($driver_info->user_name)){{$driver_info->user_name}}@endif</td> 
					<td class="center">@if(isset($value->created_at)){{$value->created_at}}@endif</td>   
					<td class="center">
						<a class="btn btn-success" href="{{URL::to("/Case_Single/$value->id")}}">
							<i class="halflings-icon white zoom-in"></i>  
						</a></br>
						<a class="btn btn-info" href="#">
							<i class="halflings-icon white edit"></i>  
						</a> 
					</td>
				</tr> 
			 
				<?php endforeach ;?>
				 

				 
			  </tbody>
		  </table>             
		</div>
	</div><!--/span-->

</div><!--/row-->

	 
	
	 
</div><!--/row-->
@endsection