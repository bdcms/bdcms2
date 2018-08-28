@extends('master.master')
 @section('content')

	<section class="section_class">
		<div class="container">
			<div class="row"> 
				<div class="col-lg-8 col-md-8 col-sm-6 col-xs-12"> 
					
					<div class="float_width">
						<div class="section_heading section_content">
							<h4>Application Step-2</h4>
						</div>
						<div class="section_content">
							<form class="form-horizontal" action="{{ url('appfrom2') }}">
								 {{csrf_field()}}
								<p>Car information</p> 

								<div class="control-group">
									<div class="col-md-2 col-lg-2 col-sm-3 col-xsm-12"> 
								    	<label class="control-label"><span class="text-danger">*</span> Car Type:</label>
									</div>
									<div class="col-md-10 col-lg-10 col-sm-9 col-xsm-12">
									    <div class="controls">
									    	<div class="col-md-5 col-lg-5 col-sm-5 col-xsm-12"style="padding-left: 0px;">
										    	<select class="control-select" name="carname_id"> 
												  	<option>Select One</option>
												  	@php
												  		$allcar = \DB::table('carnames')->get();
												  	@endphp
												  	@foreach ($allcar as $car) 
												  		<option value="{{$car->id}}">{{$car->car_name}}</option>
												  	@endforeach
												  	 
												  	 
												</select>
												<span class="err-msg text-danger">{{$errors->first('carname_id')}}</span>
											</div>
											<div class="col-md-2 col-lg-2 col-sm-2 col-xsm-12" style="padding: 0px;">
												<label class="pull-right control_level"><span class="text-danger">*</span> Wheel:</label>
											</div>

											<div class="col-md-5 col-lg-5 col-sm-5 col-xsm-12" style="padding-right: 0px;">
											<select class="control-select"  name="car_wheel">
											  	<option>Select One</option>
											  	<option value="2">2</option>
											  	<option value="3">3</option>
											  	<option value="4">4</option>
											  	<option value="6">6</option>
											  	<option value="8">8</option> 
											  	<option value="10">10</option>
											  	<option value="12">12</option>
											  	<option value="up to 12">Up to 12 Wheel.</option>
											</select> 
											<span class="err-msg text-danger">{{$errors->first('car_wheel')}}</span>
										</div>
									    </div>
									</div>
								</div> 
								<div class="control-group">
									<div class="col-md-2 col-lg-2 col-sm-3 col-xsm-12"> 
								    	<label class="control-label"><span class="text-danger">*</span> Car Chassis No:</label>
									</div>
									<div class="col-md-10 col-lg-10 col-sm-9 col-xsm-12">
									    <div class="controls">
									    	<input type="text" name="car_chasis" id="chassis_no" placeholder="Car Sasis number" value="{{old('car_chasis')}}" class="
								    	@if($errors->first('car_chasis')) field_error @endif" onchange="chassis_check();">
									    	<span class="err-msg text-danger">{{$errors->first('car_chasis')}}</span>
									    	<div id="chassis_no_error_msg"  style="color:#F00;font-weight:800"> </div>
									    </div>
									</div>
								</div>
								<div class="control-group">
									<div class="col-md-2 col-lg-2 col-sm-3 col-xsm-12"> 
								    <label class="control-label"><span class="text-danger">*</span> Engine No:</label>
									</div>
									<div class="col-md-10 col-lg-10 col-sm-9 col-xsm-12">
								    <div class="controls">
								    	<input type="text" name="car_engine_num" id="engine_no"  placeholder="car Engineen number" value="{{old('car_engine_num')}}" class="
								    	@if($errors->first('car_engine_num')) field_error @endif" onchange="engine_check();">
								    	<span class="err-msg text-danger">{{$errors->first('car_engine_num')}}</span>
								    	<div id="engine_no_error_msg"  style="color:#F00;font-weight:800"> </div>
								    </div>
									</div>
								</div>

								<div class="control-group">
									<div class="col-md-2 col-lg-2 col-sm-3 col-xsm-12"> 
								    	<label class="control-label"><span class="text-danger">*</span> Registration No:</label>
									</div>
									<div class="col-md-10 col-lg-10 col-sm-9 col-xsm-12">
									    <div class="controls">
									    	<div class="col-md-4 col-lg-4 col-sm-4 col-xsm-12" style="padding-left: 0px;"> 
									    		<input type="text" name="car_metro" id="car_metro" placeholder="Area" value="{{old('car_metro')}}" class="
								    	@if($errors->first('car_metro')) field_error @endif"> 
									    		<span class="err-msg text-danger">{{$errors->first('car_metro')}}</span>
									    		<div id="areatatus"></div> 
										    </div>
										    <div class="col-md-4 col-lg-4 col-sm-4 col-xsm-12"> 
									    		<input type="text" name="car_key" id="keyword" placeholder="Charrecter" value="{{old('car_key')}}" class="
								    	@if($errors->first('car_key')) field_error @endif" >
									    		<span class="err-msg text-danger">{{$errors->first('car_key')}}</span>
									    		<div id="keystatus"></div>
										    	 
										    </div>
										    <div class="col-md-4 col-lg-4 col-sm-4 col-xsm-12" style="padding-right: 0px;">  
									    		<input type="text" name="car_num" id="car_number"  placeholder="Number" value="{{old('car_num')}}" class="
								    	@if($errors->first('car_num')) field_error @endif" onchange="check_car_umber();">
									    		<span class="err-msg text-danger">{{$errors->first('car_num')}}</span> 

										    </div>
										    <div id="car_metro_error_msg"  style="color:#F00;font-weight:800"> </div>
									    </div>
									</div>
								</div> 

								<div class="control-group">
									<div class="col-md-2 col-lg-2 col-sm-3 col-xsm-12"> 
								    	<label class="control-label"><span class="text-danger">*</span> Reg- Date:</label>
									</div>
									<div class="col-md-10 col-lg-10 col-sm-9 col-xsm-12">
									    <div class="controls">
									    	<input type="date" name="car_reg_date" value="{{old('car_reg_date')}}" class="
								    	@if($errors->first('car_reg_date')) field_error @endif">
									    	<span class="err-msg text-danger">{{$errors->first('car_reg_date')}}</span>
									    </div>
									</div>
								</div>

								<div class="control-group">
									<div class="col-md-2 col-lg-2 col-sm-3 col-xsm-12"> 
								    	<label class="control-label"><span class="text-danger">*</span> Color: </label>
									</div>
									<div class="col-md-10 col-lg-10 col-sm-9 col-xsm-12">
								    <div class="controls">
								    	<select class="control-select" name="car_color" class="
								    	@if($errors->first('car_color')) field_error @endif">
										  	<option>Select One</option>
								    		<option value="Red">Red</option>
								    		<option value="Black">Black</option>
								    		<option value="Yellow">Yellow</option>
								    		<option value="White">White</option>
										</select> 
										<span class="err-msg text-danger">{{$errors->first('car_color')}}</span>
								    </div>
								    </div>
								</div>

								<div class="control-group">
									<div class="col-md-2 col-lg-2 col-sm-3 col-xsm-12"> 
								    <label class="control-label"><span class="text-danger">*</span> Insurence No:</label>
									</div>
									<div class="col-md-10 col-lg-10 col-sm-9 col-xsm-12">
								    <div class="controls">
								    	<input type="text" name="car_insurence" id="insurence_no" placeholder="Insurence number" value="{{old('car_insurence')}}" class="
								    	@if($errors->first('car_insurence')) field_error @endif" onchange="check_insurece();">
								    	<span class="err-msg text-danger">{{$errors->first('car_insurence')}}</span>
								    	<div id="insurence_no_error_msg"  style="color:#F00;font-weight:800"> </div>
								    </div>
								</div>
								</div>

								<div class="control-group">
									<div class="col-md-2 col-lg-2 col-sm-3 col-xsm-12"> 
								    <label class="control-label">Road Permit No:</label>
									</div>
									<div class="col-md-10 col-lg-10 col-sm-9 col-xsm-12">
								    <div class="controls">
								    	<input type="text" name="car_road_permit_no"  placeholder="Road permit number" value="{{old('car_road_permit_no')}}">
								    	<span class="err-msg text-danger">{{$errors->first('car_road_permit_no')}}</span>
								    </div>
								</div>
								</div> 

								 
								 
								<p>Driver information</p>
								<div class="control-group">
									<div class="col-md-2 col-lg-2 col-sm-3 col-xsm-12">
								    <label class="control-label"><span class="text-danger">*</span> Driver Identity:</label>
								</div>
								<div class="col-md-10 col-lg-10 col-sm-9 col-xsm-12">
								    <div class="controls">
								    	<input type="number" name="user_mobile"  placeholder="Driver Number..." value="{{old('user_mobile')}}" class="
								    	@if($errors->first('user_mobile')) field_error @endif">
								    	<span class="err-msg text-danger">{{$errors->first('user_mobile')}}</span>
								    </div>
								</div>
								</div> 

								<div class="control-group">
								  	<div class="col-md-2 col-lg-2 col-sm-3 col-xsm-12">
								  	 	<label class="control-label"> </label>
								  	</div>
									<div class="controls"> 
								  	 	<div class="col-md-10 col-lg-10 col-sm-9 col-xsm-12">
								  	 		<div class="row">
								  	 			<div class="col-md-6 col-lg-6 col-sm-6 col-xsm-12"> 
										      		<button class="signinbtn" type="reset" class="btn">Reset</button>
										  		</div>
										  		<div class="col-md-6 col-lg-6 col-sm-6 col-xsm-12"> 
										      		<button class="signinbtn" type="submit" class="btn">Next Step</button> 
										      	</div>
								  	 		</div>
									    </div>
									</div>
								</div>
							</form>	
						</div>
						
					</div>
				</div>
				
				<div class="col-lg-4 col-md-4 col-sm-6 col-xsm-12">
					 
					<div class="custom_row float_width">
						<div class="section_heading section_content">
							<h6>Guidelines for Complete Registration </h6>
						</div>
						<div class="section_content">
							<ul>
								<li>
									<span><i class="fa fa-circle"></i></span>
									<p>Registration would be complete within 3 steps.</p>
								</li>
								<li>
									<span><i class="fa fa-circle"></i></span>
									<p>profile will be active less than 7days.</p>
								</li>
								<li>
									<span><i class="fa fa-circle"></i></span>
									<p>This first step only insert your personal information.</p>
								</li>
								<li>
									<span><i class="fa fa-circle"></i></span>
									<p>Second step your Car & Driver information.</p>
								</li>
								<li>
									<span><i class="fa fa-circle"></i></span>
									<p>Third step all of document upload.</p>
								</li>
								<li>
									<span><i class="fa fa-circle"></i></span>
									<p>Be saved your password for login profile next time.</p>
								</li>
								<li>
									<span><i class="fa fa-circle"></i></span>
									<p>Type your actual name which are provide NID.</p>
								</li>
								<li>
									<span><i class="fa fa-circle"></i></span>
									<p>Care fully insert Car Sasis NO, Enginee No. </p>
								</li>
								<li>
									<span><i class="fa fa-circle"></i></span>
									<p>Care fully insert Car Sasis NO, Enginee No.</p>
								</li>
								<li>
									<span><i class="fa fa-circle"></i></span>
									<p>Use contact number or email for profile login.</p>
								</li>
							</ul> 	 	
						</div> 
					</div>

				</div>
			</div>
		</div>
	</section>

<script>

function check_car_umber(){ 
	var car_metro  	= $('#car_metro').val();
	var keyword	   	= $('#keyword').val();
	var car_number 	= $('#car_number').val();
	var car_metro 	= $.trim(car_metro);
	var keyword 	= $.trim(keyword);
	var car_number 	= $.trim(car_number); 
	var passnewpwd = 'car_metro='+car_metro+'&keyword='+keyword+'&car_number='+car_number;
	$.ajax({
		type: 'get',
		data: 'car_metro='+car_metro+'&keyword='+keyword+'&car_number='+car_number,
		url: '<?php echo url('check_car_umber'); ?>',
		success: function(responseText){  
			if(responseText==1){  //already exist
				//alert("This Email Id Already Exist");
				$("#exist").val("1"); //already exist
				$("#car_number").css('box-shadow', '2px 0px 0px 0px red'); 
				$('#car_metro_error_msg').html("This Car Number Already Exists.");	
				$("#car_number").focus();
				return false;				   
			}else if(responseText==0){
			    $("#exist").val("0");
				$("#car_metro").css('border', '');
				$('#car_metro_error_msg').html("");	
			}
		}		
	});	
}

function chassis_check(){ 
	var chassis_no = $('#chassis_no').val();
	var chassis_no = $.trim(chassis_no);
	$.ajax({
		type: 'get',
		data: 'chassis_no='+chassis_no,
		url: '<?php echo url('check_chassis_no'); ?>',
		success: function(responseText){  
			if(responseText==1){  //already exist
				//alert("This Email Id Already Exist");
				$("#exist").val("1"); //already exist
				$("#chassis_no").css('box-shadow', '2px 0px 0px 0px red'); 
				$('#chassis_no_error_msg').html("Chassis Number Already Exist.");	
				$("#chassis_no").focus();
				return false;				   
			}else if(responseText==0){
			    $("#exist").val("0");
				$("#chassis_no").css('border', '');
				$('#chassis_no_error_msg').html("");	
			}
		}		
	});	
}

function engine_check(){ 
	var engine_ = $('#engine_no').val();
	var engine_no = $.trim(engine_);
	$.ajax({
		type: 'get',
		data: 'engine_no='+engine_no,
		url: '<?php echo url('check_engine_no'); ?>',
		success: function(responseText){  
			if(responseText==1){  //already exist
				//alert("This Email Id Already Exist");
				$("#exist").val("1"); //already exist
				$("#engine_no").css('box-shadow', '2px 0px 0px 0px red'); 
				$('#engine_no_error_msg').html("Engine Number Already Exist.");	
				$("#engine_no").focus();
				return false;				   
			}else if(responseText==0){
			    $("#exist").val("0");
				$("#engine_no").css('border', '');
				$('#engine_no_error_msg').html("");	
			}
		}		
	});	
}

function check_insurece(){ 
	var insurence_no = $('#insurence_no').val();
	var insurence_no = $.trim(insurence_no);
	$.ajax({
		type: 'get',
		data: 'insurence_no='+insurence_no,
		url: '<?php echo url('check_insurence_no'); ?>',
		success: function(responseText){  
			if(responseText==1){  //already exist
				//alert("This Email Id Already Exist");
				$("#exist").val("1"); //already exist
				$("#insurence_no").css('box-shadow', '2px 0px 0px 0px red'); 
				$('#insurence_no_error_msg').html("Insurence Number Already Exist.");	
				$("#insurence_no").focus();
				return false;				   
			}else if(responseText==0){
			    $("#exist").val("0");
				$("#insurence_no").css('border', '');
				$('#insurence_no_error_msg').html("");	
			}
		}		
	});	
}

 

</script>

	@endsection