@extends('master.master')
 @section('content')

	<section class="section_class">
		<div class="container">
			<div class="row"> 
				<div class="col-lg-9 col-md-9 col-sm-6 col-xs-12"> 
					<div class="custom_row float_width">
						<div class="section_heading section_content">
							<h4>Guidelines for Complete Registration </h4>
						</div>
						<div class="section_content section_content">
							<p><span><i class="fa fa-circle"></i></span> Registration would be complete within 3 steps.</p>	 
							<p><span><i class="fa fa-circle"></i></span> profile will be active less than 7days.</p>	 
							<p><span><i class="fa fa-circle"></i></span> This first step only insert your personal information.</p>	 
							<p><span><i class="fa fa-circle"></i></span> Second step your Car & Driver information.</p>	 
							<p><span><i class="fa fa-circle"></i></span> Third step all of document upload.</p>	 
							<p><span><i class="fa fa-circle"></i></span> Be saved your password for login profile next time.</p>	 
							<p><span><i class="fa fa-circle"></i></span> Type your actual name which are provide NID.</p>	
							<p><span><i class="fa fa-circle"></i></span> Care fully insert Car Sasis NO, Enginee No. </p>	
							<p><span><i class="fa fa-circle"></i></span> Use contact number or email for profile login.</p>	 	
						</div>
						
					</div>
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
								    	<label class="control-label"><span class="text-danger">*</span> Car Chasis No:</label>
									</div>
									<div class="col-md-10 col-lg-10 col-sm-9 col-xsm-12">
									    <div class="controls">
									    	<input type="text" name="car_chasis"  placeholder="Car Sasis number" value="{{old('car_chasis')}}" class="
								    	@if($errors->first('car_chasis')) field_error @endif">
									    	<span class="err-msg text-danger">{{$errors->first('car_chasis')}}</span>
									    </div>
									</div>
								</div>
								<div class="control-group">
									<div class="col-md-2 col-lg-2 col-sm-3 col-xsm-12"> 
								    <label class="control-label"><span class="text-danger">*</span> Engineen No:</label>
									</div>
									<div class="col-md-10 col-lg-10 col-sm-9 col-xsm-12">
								    <div class="controls">
								    	<input type="text" name="car_engine_num"  placeholder="car Engineen number" value="{{old('car_engine_num')}}" class="
								    	@if($errors->first('car_engine_num')) field_error @endif">
								    	<span class="err-msg text-danger">{{$errors->first('car_engine_num')}}</span>
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
								    	@if($errors->first('car_key')) field_error @endif">
									    		<span class="err-msg text-danger">{{$errors->first('car_key')}}</span>
									    		<div id="keystatus"></div>
										    	 
										    </div>
										    <div class="col-md-4 col-lg-4 col-sm-4 col-xsm-12" style="padding-right: 0px;">  
									    		<input type="text" name="car_num"  placeholder="Number" value="{{old('car_num')}}" class="
								    	@if($errors->first('car_num')) field_error @endif">
									    		<span class="err-msg text-danger">{{$errors->first('car_num')}}</span> 

										    </div>
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
								    	<input type="text" name="car_insurence"  placeholder="Insurence number" value="{{old('car_insurence')}}" class="
								    	@if($errors->first('car_insurence')) field_error @endif">
								    	<span class="err-msg text-danger">{{$errors->first('car_insurence')}}</span>
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
				
				@include('master.inc.sidebar')
			</div>
		</div>
	</section>
	@endsection