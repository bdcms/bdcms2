@extends('master.master')
 @section('content')
	<!-- --------------------------------Welcome Section Start--------------------------------- --> 
	<section class="section_class">
		<div class="container">
			<div class="row"> 
				<div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">  
					<div class="float_width">
						<div class="section_heading section_content ">
							<h4>Application Step-1</h4>  
							<p>Insert here only car woner's personal information. Use only valied information for successful registration.</p>
						</div>
						<div class="section_content section_content signup_section">
							<form class="form-horizontal" action="{{ url('appfrom1') }}">
								{{csrf_field()}}
								<p>Personal Information</p>

								<div class="control-group">
									<div class="col-md-2 col-lg-2 col-sm-3 col-xsm-12">
									    <label class="control-label"><span class="text-danger">*</span> Full Name:</label>
									</div>
									<div class="col-md-10 col-lg-10 col-sm-9 col-xsm-12">
								    <div class="controls">
									    	<input type="text" name="name" id="name"  placeholder="Full Name" value="{{old('name')}}" class="
								    	@if($errors->first('name')) field_error @endif" tabindex="1">  
									    	<span class="err-msg text-danger">{{$errors->first('name')}}</span>
									    </div>
									     
									</div>
								</div>

								<div class="control-group">
									<div class="col-md-2 col-lg-2 col-sm-3 col-xsm-12">
									    <label class="control-label"><span class="text-danger">*</span> Father Name:</label>
									</div>
									<div class="col-md-10 col-lg-10 col-sm-9 col-xsm-12">
								    <div class="controls">
									    	<input type="text" name="fname"  placeholder="Father Name" value="{{old('fname')}}" class="
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
									    	<input type="number" name="nid" id="nid_no" placeholder="Nid number" value="{{old('nid')}}" class="
								    	@if($errors->first('nid')) field_error @endif" onchange="check_nid();">
									    	<span class="err-msg text-danger">{{$errors->first('nid')}}</span>
									    	<div id="nid_no_error_msg"  style="color:#F00;font-weight:800"> </div>
									    </div>
									</div>
								</div>

								<div class="control-group">
									<div class="col-md-2 col-lg-2 col-sm-3 col-xsm-12">
									    <label class="control-label"><span class="text-danger">*</span> Contact No:</label>
									</div>
									<div class="col-md-10 col-lg-10 col-sm-9 col-xsm-12">
								    <div class="controls">
									    	<input type="number" id="phone_no" name="contact_no"  placeholder="Contact number" value="{{old('contact_no')}}" class="
								    	@if($errors->first('contact_no')) field_error @endif" tabindex="6">
									    	<span class="err-msg text-danger">{{$errors->first('contact_no')}}</span>
									    	<div id="phone_no_error_msg"  style="color:#F00;font-weight:800"> </div>
									    </div>
									</div>
								</div>

								<div class="control-group">
									<div class="col-md-2 col-lg-2 col-sm-3 col-xsm-12">
									    <label class="control-label"><span class="text-danger">*</span> Email:</label>
									</div>
									<div class="col-md-10 col-lg-10 col-sm-9 col-xsm-12">
								    <div class="controls">
									    	<input type="email" id="email_id" name="email"  placeholder="Email" value="{{old('email')}}" class="
								    	@if($errors->first('email')) field_error @endif" onchange="check_email();">
									    	<span class="err-msg text-danger">{{$errors->first('email')}}</span>
									    	<div id="email_id_error_msg"  style="color:#F00;font-weight:800"> </div>
									    </div>
									</div>
								</div>
								<div class="control-group">
									<div class="col-md-2 col-lg-2 col-sm-3 col-xsm-12">
									    <label class="control-label"><span class="text-danger">*</span> City:</label>
									</div>
									<div class="col-md-10 col-lg-10 col-sm-9 col-xsm-12">
								    <div class="controls">   
									    <input type="text" name="district" class="input-medium " id="car_metro"  placeholder="City.." value="{{Request::old('district')}}" onchange="distirct_existing_check();"> 
									  	<span class="err-msg text-danger">{{$errors->first('district')}}</span>
									  	<div id="areatatus" class="list_suggation"></div>
									     <div id="car_metro_error_msg"  style="color:#F00;font-weight:800;float: left; margin-top: 15px;"> </div>
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
								      		<button class="btn signinbtn myFunction" type="submit" >Next Step</button> 
								      	</div>
						  	 		</div> 
						  	 		</div> 
								</div>
							  </div>
								</form>	
						</div>
						
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
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
                $("#exist").val("0");
                $("#car_metro").css('border', '');
                $('#car_metro_error_msg').html("Invalid City Name.");   
            }
        }       
    }); 
}

function check_email(){ 
	var email_id = $('#email_id').val();
	var email_id 	= $.trim(email_id); 
	$.ajax({
		type: 'get',
		data: 'email_id='+email_id,
		url: '<?php echo url('check_mer_email'); ?>',
		success: function(responseText){  
			if(responseText==1){  //already exist
				//alert("This Email Id Already Exist");
				$("#exist").val("1"); //already exist
				$("#email_id").css('box-shadow', '2px 0px 0px 0px red'); 
				$('#email_id_error_msg').html("This Email Id Already Exist.");	
				$("#email_id").focus();
				return false;				   
			}else if(responseText==0){
			    $("#exist").val("0");
				$("#email_id").css('border', '');
				$('#email_id_error_msg').html("");	
			}
		}		
	});	
}

function check_nid(){ 
	var nid_no = $('#nid_no').val();
	var nid_no 	= $.trim(nid_no); 
	
	$.ajax({
		type: 'get',
		data: 'nid_no='+nid_no,
		url: '<?php echo url('check_nid_no'); ?>',
		success: function(responseText){  
			if(responseText==1){  //already exist
				//alert("This Email Id Already Exist");
				$("#exist").val("1"); //already exist
				$("#nid_no").css('box-shadow', '2px 0px 0px 0px red'); 
				$('#nid_no_error_msg').html("National ID Already Exist.");	
				$("#nid_no").focus();
				return false;				   
			}else if(responseText==0){
			    $("#exist").val("0");
				$("#nid_no").css('border', '');
				$('#nid_no_error_msg').html("");	
			}
		}		
	});	
}




$(document).on("click", ".myFunction", function(){ 
	var phone_no 	     = $('#phone_no'); 
	//var select_mer_city  = $('#select_mer_city');
  
  if($.trim(phone_no.val()) == ""){
		    
			phone_no.css('border', '1px solid red'); 
			$('#phone_no_error_msg').html('Please Enter Phone Number');
			phone_no.focus();
			return false;
		}else if (!(phone_no.val().length == 10)) {
            phone_no.css('border', '1px solid red'); 
			$('#phone_no_error_msg').html('Number Length Must be 10 Digits. Insert Last 10 Digits of your Phone Number.');
			phone_no.focus();
			return false;
        }
		else{
			phone_no.css('border', ''); 
			$('#phone_no_error_msg').html('');
		} 
	 
  });



</script>
	<!-- --------------------------------Welcome Section Exit--------------------------------- -->
@endsection