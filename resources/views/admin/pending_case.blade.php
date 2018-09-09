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
		<a href="{{url('/bdcmsadmin')}}">Home</a> 
		<i class="icon-angle-right"></i>
	</li>
	<li> 
		<a href="{{url('/WithDrawCase')}}">Case</a> 
		<i class="icon-angle-right"></i>
	</li>
	<li>Case History</li>
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
 					$area= App\SelectModel::select_district_byid($value->case_area);   
			  	?>
			  	 
				<tr> 
					<td class="center">@if(isset($value->won_name)){{$value->won_name}}@endif</td>
					<td class="center">@if(isset($value->car_reg_num)){{$value->car_reg_num}}@endif</td>
					<td class="center">@if(isset($value->case_name)){{$value->case_name}}@endif @if(isset($value->black_list))<span style="color:red;">*</span>@endif</td> 
					<td class="center">@if(isset($area->metro_name)){{$area->metro_name}}@endif</td>  
					<td class="center">@if(isset($value->dri_name)){{$value->dri_name}}@endif</td> 
					<td class="center">@if(isset($value->complainant_date)){{$value->complainant_date}}@endif</td>   
					<td class="center">
						<a class="btn btn-success" href="{{URL::to("/Case_Single/$value->id")}}">
							<i class="halflings-icon white zoom-in"></i>  
						</a> 
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
@endsection