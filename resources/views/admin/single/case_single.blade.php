 
@extends('master.admin_layout')
@section('content')
<?php use App\Http\Controllers\CaseController; ?>
<?php if($msg = Session::get('message')): $class = Session::get('class'); if($class=='alert alert-success'){$snap='Well done! ';}else{$snap='Oh snap! ';}?> 
 	<div class="{{$class}} success_alrt_msg">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>{{$snap}}</strong> {{$msg}}
	</div> 
<?php Session::put('message',null); endif; ?>
@if (session('msg'))
    <div class="alert alert-success">
        {{ session('msg') }}
        <button type="button" class="close" data-dismiss="alert">×</button>
    </div>
@endif
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
	<li>Single</li>
</ul>

<div class="row-fluid sortable">		
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon user"></i><span class="break"></span>Car Number: {{$case_info->car_reg_num}} </h2>
			<div class="box-icon">
				<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
				<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
				<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
			</div>
		</div>
		<div class="box-content"> 
			<table class="table table-striped"> 
	              <tbody> 
	              	<tr>
	                  <td>Car Number:</td>
	                  <td><a href="#">{{$case_info->car_reg_num}}</a></td> 
	                </tr> 

	                <tr>
	                  <td>Case Type:</td>
	                  <td>{{$case_info->case_name}}</td> 
	                </tr> 

	                <tr>
	                  <td>Name of Owner:</td>
	                  <td><a href="#">{{$case_info->won_name}}</a></td> 
	                </tr> 
	                <tr>
	                  <td>Name of Driver:</td>
	                  <td><a href="#">{{$case_info->dri_name}}</a></td> 
	                </tr> 
	                <tr>
	                  <td>Case Area:</td>
	                  <td>{{strip_tags($area->metro_name)}}</td> 
	                </tr>
	                <tr>
	                  <td>Metro:</td>
	                  <td>{{strip_tags($metro->metro_name)}}</td> 
	                </tr>

	                @if(isset($case_info->withdraw_date))
	                <tr>
	                  <td>Case With draw Date:</td>
	                  <td><a href="#">{{$case_info->withdraw_date}}</a></td> 
	                </tr>
	                @endif

	                
	                @if(isset($case_info->withdraw_id))
	                <?php 
	                	$name=CaseController::find_out_case_widthdraw_name($case_info->withdraw_id,$case_info->withdraw_role);
	                ?>
	                <tr>
	                  <td>Case With draw Person:</td>
	                  <td><a href="#">{{$name}}</a></td> 
	                </tr>
	                @endif

	                <tr>
	                  <td>Case Status:</td>
	                  <td>
	                  	@if($case_info->case_status==1)
	                  	<form action="{{url("/case_with_draw")}}" method="Post"> 
	                  		{{csrf_field()}} 
	                  		<input type="hidden" name="case_id" value="{{$case_info->id}}">
							<button type="submit" class="btn btn-primary">With Draw Case</button> 
						</form>
						@else
						<form action="" method="Post">
							<span class="label label-success">Withdraw</span>
						</form>
						@endif
	                  </td> 
	                </tr> 
	              </tbody>
	            </table>           
		</div>
	</div>
	<div class="box span12 custom_data_table_box">
		<div class="box-content ">
			<div class="box-header" data-original-title>
			<h2><i class="halflings-icon user"></i><span class="break"></span>Case History of {{$case_info->car_reg_num}} car.</h2>
			<div class="box-icon">
				<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
				<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
				<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
			</div>
		</div>
			<table class="table table-striped table-bordered bootstrap-datatable datatable">
			  <thead>
				  <tr>
					  <th>Owner</th>
					  <th>Car Number</th>
					  <th>Case</th>
					  <th>Area</th> 
					  <th>Driver</th> 
					  <th>Date</th>  
					  <th>Status</th> 
					  <th>Action</th> 
				  </tr>
			  </thead>   
			  <tbody>
			  	@if(count($morecase)>0)  
 				@foreach($morecase as $value)

 				<?php 
 					$pen_area= CaseController::select_district_name($value->case_area);
 				?>
			  	 
				<tr> 
					<td class="center">@if(isset($value->won_name)){{$value->won_name}}@endif</td>
					<td class="center">@if(isset($value->car_reg_num)){{$value->car_reg_num}}@endif</td>
					<td class="center">@if(isset($value->case_name)){{$value->case_name}}@endif @if(isset($value->black_list))<span style="color:red;">*</span>@endif</td> 
					<td class="center">@if(isset($pen_area->metro_name)){{$pen_area->metro_name}}@endif</td>  
					<td class="center">@if(isset($value->dri_name)){{$value->dri_name}}@endif</td> 
					<td class="center">@if(isset($value->complainant_date)){{$value->complainant_date}}@endif</td>   
					<td class="center">
						@if($value->case_status==1)
	                  	<a class="" href="{{URL::to("/Case_Single/$value->id")}}"><span class="label label-important">Pending</span></a> 
						@else
						<a class="" href="#"><span class="label label-success">Withdraw</span></a>
						@endif
					</td>   
					<td class="center">
						<a class="btn btn-success" href="{{URL::to("/Case_Single/$value->id")}}">
							<i class="halflings-icon white zoom-in"></i>  
						</a>  
					</td>
				</tr> 
			 
				@endforeach
				 @endif

				 
			  </tbody>
		  </table>            
		</div>
	</div><!--/span-->

</div><!--/row-->

 
	
	 
</div><!--/row-->
@endsection