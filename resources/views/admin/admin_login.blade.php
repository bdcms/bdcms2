
@extends('master.master')
@section('content')
<!-- --------------------------------Login Section Start--------------------------------- --> 
<section class="login_section" style="background: url({{url('public/Frontend/')}}/images/slider/asd.jpg) no-repeat 0px 0px;background-size: cover;background-attachment: fixed;"> 
	<div class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4">
		<div class="row">
			<div class="login_wrap"> 
				<h5 style="margin-bottom:30px;">BDCMS Admin Login</h5>
				<div class="login_div">

				<div class="imag_login"><img src="{{url('public/Frontend/')}}/images/profile_img.jpg"></div>
					<form class="form-inline" method="post" action="{{url('User_Login')}}">
						{{csrf_field()}} 
						<div class="form-control login_model_label">  
							
							 
							<label class="radio-inline">
							  <input type="hidden" name="user_role" id="user_role" value="1">  
							</label>
						</div>
					  	<input type="text" class="input-small" name = "email" id="email" placeholder="Email" value="{{Request::old('email')}}" >
					  	<span class="error_message">{{ $errors->first('email')}} </span>
					  	 
					  	<input type="password" class="input-small" id="password" name="password" placeholder="Password" value="{{Request::old('password')}}" 
					  	onchange="check_user();">
					  	<span class="error_message">{{ $errors->first('password')}} </span>
					  	<div id="password_error_msg"  style="color:#F00;font-weight:800"> </div>
					    <label>
					      <input type="checkbox"> <span> Remember me</span>
					    </label>
					 
					  	<button type="submit" class="btn sign_in_btn">Sign in</button>
					</form>
					<p><a href="{{URL::to('/ownerinfo')}}">Forget Password</a> <a href="{{URL::to('/ownerinfo')}}">Sign Up</a></p>
				</div>				
			</div>
		</div>
	</div>  
</section>

<script>

function check_user(){ 
	var user_role  	= $('#user_role:checked').val();
	var email	   	= $('#email').val();
	var password 	= $('#password').val();  
	var email 		= $.trim(email);
	var password 	= $.trim(password); 
 
	$.ajax({
		type: 'get',
		data: 'password='+password+'&email='+email+'&user_role='+user_role,
		url: '<?php echo url('check_user_login'); ?>',
		success: function(responseText){  
			if(responseText==1){  //already exist
				//alert("This Email Id Already Exist");
				$("#exist").val("1"); //already exist  
				$("#password").focus();
				return false;				   
			}else if(responseText==0){
			    $("#exist").val("0");
				$("#password").css('border', '');
				$("#password").css('box-shadow', '2px 0px 0px 0px red'); 
				$("#email").css('box-shadow', '2px 0px 0px 0px red'); 
				$('#email_error_msg').html("Invalid Email or Password.");
			}
		}		
	});	
}

 
</script>
<!-- --------------------------------Login Section Exit--------------------------------- --> 
@endsection