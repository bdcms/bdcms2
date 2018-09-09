@extends('master.master')
@section('content')
<!-- --------------------------------Welcome Section Start--------------------------------- --> 
	<section class="section_bg">
		<div class="container">   

			<div class="row">
				<div class="custom_row clear search_out_wrap">
					<div class="col-lg-8 col-md-8 col-sm-8">
					 	<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<h5>Searching Number:</h5>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="search_out_content"><h5>{{$allinfo->car_reg_num}}<h5></div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<h5>Status:</h5>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="search_out_content"><div class="search_out_content">
									@if(isset($black_list))
										@if($black_list)
										<h5 style="color: red;">Black Listed Car<h5>
										@else
										<h5 style="color: green;">Clear<h5>
										@endif
									@endif
								</div></div> 
							</div>
						</div>
						 

						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<h5>Insurence date:</h5>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="search_out_content">  
									@if(isset($ins_date))
										@if($ins_date==1)
											<h5 style="color: green;">Available<h5>
										@else 
										<h5 style="color: red;"> Expired<h5>
										@endif
									@endif
								
								</div>
							</div>
						</div>
						
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<h5>Road Permit:</h5>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="search_out_content"><h5>All over Bangladesh.<h5></div>
							</div>
						</div>
						<div class="row"> 
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<h5>Others Document's:</h5>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="search_out_content"><h5>Clear<h5></div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<h5>Tax Remain with in date:</h5>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="search_out_content"><h5 style="color: red;"> 1200/= (12-may-18)<h5></div>
							</div>
						</div>

						
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								 
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								@if(!empty(Session::get('user_id') && Session::get('role_id')==6))
								<div class="search_out_content">
									<h5><a href="single.html" data-toggle="modal" data-target="#casemodel">Apply For Case</a> </h5>
								</div>
								@endif
								<div class="search_out_content"><a href="single.html">For Details</a></div> 
							</div>
						</div>

					</div>


					<div class="col-lg-4 col-md-4 col-sm-4">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="search_out_pro_picture">
									<a href="woner.html"><img src="{{URL::to('public/Frontend/images/t1.jpg')}}"></a>
									<p><a href="woner.html">woner of the car</a></p> 
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="search_out_pro_picture">
									<a href="driver_single.html"><img src="{{URL::to('public/Frontend/images/t1.jpg')}}"></a>
									<p><a href="driver_single.html">Driver of the car</a></p> 
								</div>
							</div>
						</div>
						  
					</div>  
					
				</div>
			</div>
		</div>
	</section>
	<!-- --------------------------------Welcome Section Exit--------------------------------- -->
 	<section>
 		<div id="casemodel" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;">
		    <div class="modal-dialog case_add" role="document">
		      	<div class="modal-content"> 
		        <div class="modal-header">
		          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
		          <h4 class="modal-title" id="myModalLabel">Apply For a Case </h4><p>{{$allinfo->car_reg_num}}</p>
		        </div>
		        	<div class="modal-body "> 
		        		<form class="form-horizontal" method="POST" action="{{URL('/case_submit')}}">
		        		{{csrf_field()}}
							<div class="control-group"> 
							    <div class="controls">
							    	<input type="text" name="place"  id="car_metro" placeholder="Insert Case Place..." value="{{Request::old('car_metro')}}" onchange="distirct_existing_check();">
							    	<span class="error_message">{{ $errors->first('car_metro')}} </span>
							    	<input type="hidden" name="car_number"  value="{{$allinfo->car_reg_num}}">
							    	<div id="areatatus" style="position: absolute; margin-top: 34px;width: 91.1%;" class="list_suggation"></div>
							    	<div id="car_metro_error_msg"  style="color:#F00;font-weight:800;float: left; "> </div>
							    </div>
							</div>
							<div class="control-group"> 
							    <div class="controls">
							    	<select class="form-control" name="case_couse">
							    		<option value="">Cuse of Case</option>
							    			@php
										  		$cases = DB::table('case_types')->get();
										  	@endphp
										  	@foreach ($cases as $case) 
										  		<option value="{{$case->id}}">{{$case->case_name}}</option>
										  	@endforeach 
							    	</select>
							    	<span class="error_message">{{ $errors->first('case_couse')}} </span>
							    </div>
							</div> 
							<div class="control-group"> 
							    <div class="controls">
							    	<textarea name="discription" row="2"></textarea> 
							    </div>
							</div>
							<div class="control-group"> 
							    <div class="controls">
							    	<input type="checkbox" name="black" value="1">
							    	<label>Add to Black List</label>
							    </div>
							</div> 
							  <div class="control-group">
							  	 <label class="control-label"> </label>
							    <div class="controls">  
							     	<button class="signinbtn" type="submit" class="btn">Create Case</button>
							    	{{-- <a href="signup2.html" id="Delete">Create Case</a> --}}

							    </div>
							  </div>
							</form>
		      		</div><!-- /.modal-content -->
		    	</div><!-- /.modal-dialog -->
		  	</div>
		</div>
		<script>
 

	function distirct_existing_check(){ 
	    var car_metro = $('#car_metro').val();
	    var car_metro = $.trim(car_metro);
	    $.ajax({
	        type: 'get',
	        data: 'car_metro='+car_metro,
	        url: '<?php echo url('check_car_metro_exists'); ?>',
	        success: function(responseText){  
	            if(responseText==1){  //already exist
	                //alert("This Email Id Already Exist");
	                $("#exist").val("1"); //already exist
	                $("#car_metro").css('box-shadow', '2px 0px 0px 0px red'); 
	                $('#car_metro_error_msg').html("");  
	                $("#car_metro").focus();
	                return false;                  
	            }else if(responseText==0){
	            	alert(car_metro+" Invalid Area (District) Name.");  
	            }
	        }       
	    }); 
	}
</script>
@endsection

