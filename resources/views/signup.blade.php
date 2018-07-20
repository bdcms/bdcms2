@extends('master.master')
 @section('content')
	<!-- --------------------------------Welcome Section Start--------------------------------- --> 
	<section class="section_class">
		<div class="container">
			<div class="row"> 
				<div class="col-lg-9 col-md-9 col-sm-6 col-xs-12"> 
					<div class="custom_row clear">
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
						<div class="section_heading section_content ">
							<h4>Application Step-1</h4>  
						</div>
						<div class="section_content section_content signup_section">
							<form class="form-horizontal" action="{{ url('appfrom1') }}">
								{{csrf_field()}}
								<p>Personal Information</p>

								<div class="control-group">
									<div class="col-md-2 col-lg-2 col-sm-3 col-xsm-12">
									    <label class="control-label"><span class="text-danger">*</span> Name:</label>
									</div>
									<div class="col-md-10 col-lg-10 col-sm-9 col-xsm-12">
								    <div class="controls">
									    	<input type="text" name="name"  placeholder="Name" value="{{old('name')}}" class="
								    	@if($errors->first('name')) field_error @endif">  
									    	<span class="err-msg text-danger">{{$errors->first('name')}}</span>
									    </div>
									</div>
								</div>

								<div class="control-group">
									<div class="col-md-2 col-lg-2 col-sm-3 col-xsm-12">
									    <label class="control-label"><span class="text-danger">*</span> F-Name:</label>
									</div>
									<div class="col-md-10 col-lg-10 col-sm-9 col-xsm-12">
								    <div class="controls">
									    	<input type="text" name="fname"  placeholder="F-Name" value="{{old('fname')}}" class="
								    	@if($errors->first('fname')) field_error @endif">
									    	<span class="err-msg text-danger">{{$errors->first('fname')}}</span>
									    </div>
									</div>
								</div>

								<div class="control-group">
									<div class="col-md-2 col-lg-2 col-sm-3 col-xsm-12">
									    <label class="control-label"><span class="text-danger">*</span> NID No:</label>
									</div>
									<div class="col-md-10 col-lg-10 col-sm-9 col-xsm-12">
								    <div class="controls">
									    	<input type="number" name="nid"  placeholder="Nid number" value="{{old('nid')}}" class="
								    	@if($errors->first('nid')) field_error @endif">
									    	<span class="err-msg text-danger">{{$errors->first('nid')}}</span>
									    </div>
									</div>
								</div>

								<div class="control-group">
									<div class="col-md-2 col-lg-2 col-sm-3 col-xsm-12">
									    <label class="control-label"><span class="text-danger">*</span> Contact No:</label>
									</div>
									<div class="col-md-10 col-lg-10 col-sm-9 col-xsm-12">
								    <div class="controls">
									    	<input type="number" name="contact_no"  placeholder="Contact number" value="{{old('contact_no')}}" class="
								    	@if($errors->first('contact_no')) field_error @endif">
									    	<span class="err-msg text-danger">{{$errors->first('contact_no')}}</span>
									    </div>
									</div>
								</div>

								<div class="control-group">
									<div class="col-md-2 col-lg-2 col-sm-3 col-xsm-12">
									    <label class="control-label"><span class="text-danger">*</span> Email:</label>
									</div>
									<div class="col-md-10 col-lg-10 col-sm-9 col-xsm-12">
								    <div class="controls">
									    	<input type="email" name="email"  placeholder="Email" value="{{old('email')}}" class="
								    	@if($errors->first('email')) field_error @endif">
									    	<span class="err-msg text-danger">{{$errors->first('email')}}</span>
									    </div>
									</div>
								</div>

								<div class="control-group">
									<div class="col-md-2 col-lg-2 col-sm-3 col-xsm-12">
									    <label class="control-label"><span class="text-danger">*</span> password:</label>
									</div>
									<div class="col-md-10 col-lg-10 col-sm-9 col-xsm-12">
								    <div class="controls">
									    	<input type="password" name="password"  placeholder="Password" value="{{old('password')}}" class="
								    	@if($errors->first('password')) field_error @endif">
									    	<span class="err-msg text-danger">{{$errors->first('password')}}</span>
									    </div>
									</div>
								</div>

								<div class="control-group">
									<div class="col-md-2 col-lg-2 col-sm-3 col-xsm-12">
									    <label class="control-label"><span class="text-danger">*</span> Re-password:</label>
									</div>
									<div class="col-md-10 col-lg-10 col-sm-9 col-xsm-12">
								    <div class="controls">
									    	<input type="password" name="password_confirmation"  placeholder="Re-password" value="{{old('password_confirmation')}}" class="
								    	@if($errors->first('password_confirmation')) field_error @endif">
									    	<span class="err-msg text-danger">{{$errors->first('password_confirmation')}}</span>
									    </div>
									</div>
								</div>

								<div class="control-group">
									<div class="col-md-2 col-lg-2 col-sm-3 col-xsm-12">
									    <label class="control-label">PassPort No:</label>
									</div>
									<div class="col-md-10 col-lg-10 col-sm-9 col-xsm-12">
								    <div class="controls">
									    	<input type="text" name="passport"  placeholder="Passport number" value="{{old('passport')}}">
									    	<span class="err-msg text-danger">{{$errors->first('passport')}}</span>
									    </div>
									</div>
								</div>

								<div class="control-group">
									<div class="col-md-2 col-lg-2 col-sm-3 col-xsm-12">
									    <label class="control-label">Licence No:</label>
									</div>
									<div class="col-md-10 col-lg-10 col-sm-9 col-xsm-12">
								    <div class="controls">
									    	<input type="text" name="licence"  placeholder="Licence number" value="{{old('licence')}}">
									    	<span class="err-msg text-danger">{{$errors->first('licence')}}</span>
									    </div>
									</div>
								</div> 

								<div class="control-group">
									<div class="col-md-2 col-lg-2 col-sm-3 col-xsm-12">
									    <label class="control-label"><span class="text-danger">*</span> Address:</label>
									</div>
									<div class="col-md-10 col-lg-10 col-sm-9 col-xsm-12">
								    <div class="controls">
									    	<input type="text" name="address"  placeholder="Address" value="{{old('address')}}" class="
								    	@if($errors->first('address')) field_error @endif">
									    	<span class="err-msg text-danger">{{$errors->first('address')}}</span>
									    </div>
									</div>
								</div> 

								<div class="control-group">
									<div class="col-md-2 col-lg-2 col-sm-3 col-xsm-12">
									    <label class="control-label"><span class="text-danger">*</span> Date of Birth:</label>
									</div>
									<div class="col-md-10 col-lg-10 col-sm-9 col-xsm-12">
								    <div class="controls">
									    	<input type="date" name="dateofbirth" value="{{old('dateofbirth')}}" class="
								    	@if($errors->first('dateofbirth')) field_error @endif">
									    	<span class="err-msg text-danger">{{$errors->first('dateofbirth')}}</span>
									    </div>
									</div>
								</div>

								<div class="control-group">
									<div class="col-md-2 col-lg-2 col-sm-3 col-xsm-12">
									    <label class="control-label"><span class="text-danger">*</span> Gender:</label>
									</div>
									<div class="col-md-10 col-lg-10 col-sm-9 col-xsm-12">
								    	<div class="row">
									    	<div class="controls">
										    	<input type="radio" name="gender" value="male">Male 
										    	<input type="radio" name="gender" value="female" class="
								    	@if($errors->first('gender')) field_error @endif">Female
										    </div>
										    	<span class="err-msg text-danger" style="margin-left: 3%;">{{$errors->first('gender')}}</span>
									    </div>
									</div>
								</div>  

							  <div class="control-group">
							  	<div class="col-md-2 col-lg-2 col-sm-3 col-xsm-12"></div>
							  	<div class="col-md-10 col-lg-10 col-sm-9 col-xsm-12"> 
						  	 		<div class="row">
						  	 			<div class="controls">
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
	<!-- --------------------------------Welcome Section Exit--------------------------------- -->
@endsection