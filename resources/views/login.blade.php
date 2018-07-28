
@extends('master.master')
@section('content')
<!-- --------------------------------Login Section Start--------------------------------- --> 
<section class="login_section" style="background: url({{url('public/Frontend/')}}/images/slider/asd.jpg) no-repeat 0px 0px;background-size: cover;background-attachment: fixed;"> 
	<div class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4">
		<div class="row">
			<div class="login_wrap"> 
				<div class="login_div">
				<div class="imag_login"><img src="{{url('public/Frontend/')}}/images/profile_img.jpg"></div>
					<form class="form-inline" method="post" action="{{url('User_Login')}}">
						{{csrf_field()}} 
					  	<input type="text" class="input-small" name = "email" placeholder="Email" value="{{Request::old('email')}}">
					  	<span class="error_message">{{ $errors->first('email')}} </span>
					  	<input type="password" class="input-small" name="password" placeholder="Password" value="{{Request::old('password')}}">
					  	<span class="error_message">{{ $errors->first('password')}} </span>

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
<!-- --------------------------------Login Section Exit--------------------------------- --> 
@endsection