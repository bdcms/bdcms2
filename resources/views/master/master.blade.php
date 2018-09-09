<!DOCTYPE html>
<html lang="en">
	<head>
		<title></title>
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link href="{{url('public/Frontend')}}/css/bootstrap.css" rel="stylesheet">
		<link href="{{url('public/Frontend')}}/css/menu.css" rel="stylesheet">
		<link href="{{url('public/Frontend')}}/css/superfish.css" rel="stylesheet">
		<link href="{{url('public/Frontend')}}/css/meanmenu.css" rel="stylesheet">
		<link href="{{url('public/Frontend')}}/css/datatables.css" rel="stylesheet"> 
		<link href="{{url('public/Frontend')}}/css/datatables.min.css" rel="stylesheet"> 
		<link href="{{url('public/Frontend')}}/css/color.css" rel="stylesheet"> 
		<link href="{{url('public/Frontend')}}/css/style.css" rel="stylesheet">
	<!-- font awesome this template -->
		<link href="{{url('public/Frontend')}}/fonts/css/font-awesome.css" rel="stylesheet">
		<link href="{{url('public/Frontend')}}/fonts/css/font-awesome.min.css" rel="stylesheet">
		<link href="{{url('public/Frontend')}}/fonts/font/FontAwesome.otf" rel="stylesheet">
		<link href="{{url('public/Frontend')}}/fonts/font/fontawesome-webfont.ttf" rel="stylesheet"> 
	</head>
	<body>
	<!-- --------------------------------Menu Section Start--------------------------------- -->
 <section>
 	<div class="navigation"> 
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="logo">
							<a href="{{URL::to('/')}}"><img src="{{url('public/Frontend')}}/images/logo.png"></a>
						</div>
					</div>
					<div class="col-sm-10">
						<nav>
							<ul class="sf-menu">
								<li class=" current active"><a href="{{URL::to('/')}}">Home</a></li>
								<li><a href="{{url('/about')}}">About</a></li>   
								<li><a href="{{url('/blog')}}">Blog</a></li>
								<li><a href="contact.html">Contact Us</a></li>
								@if(!empty(Session::get('user_id') && Session::get('role_id')==6 OR Session::get('role_id')==2 OR Session::get('role_id')==3)) 
								<li><a data-toggle="modal" data-target=".bs-example-modal-sm" href="">Setting</a></li> 
								@else
								<li><a  data-toggle="modal" data-target="#myModal" href="#">Login</a></li>
								@endif
							</ul>
						</nav>

					</div>
				</div>	
			</div>
		</div>
 </section>
	
 

<div class="modal fade bs-example-modal-sm setting_model" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
    	<a href="">
    		@if(Session::get('user_pic')!=NULL)
    		<img src="{{Session::get('user_pic')}}"   alt="image">
    		@else 
    		<img src="{{URL::to('/public/Frontend/images/team/profile_img.jpg')}}"   alt="image">  
    		@endif
    	</a>
      <h6>{{Session::get('user_name')}}</h6>
      <div class="setting_content">
      	<ul>
      		<li><a href="user_id">Setting</a></li>
      		<li><a href="#">Help</a></li>
      	</ul>
      </div>
       <h6><a href="{{url('/User_Logout')}}"><i class="fa fa-power-off"></i></a></h6>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="background: url(http://localhost/BDCMS/public/Frontend/images/slider/asd.jpg) no-repeat 0px 0px;background-size: cover;background-attachment: fixed;">
  <div class="modal-dialog signin_model" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        {{-- <h4 class="modal-title" id="myModalLabel">Login</h4> --}} 
      </div>
      <div class="modal-body">
        <div class="login_wrap" style="min-height: 0px; margin-top: 0px;"> 
				<div class="login_div" style="background:none;">
				<div class="imag_login"><img src="{{url('public/Frontend/')}}/images/profile_img.jpg"></div>
					<form class="form-inline" method="post" action="{{url('User_Login')}}">
						{{csrf_field()}} 
						<div class="form-control login_model_label"> 
							<input type="radio"  name="user_role" value="2"> <label>Woner</label>

							<input type="radio" name="user_role" value="3"><label>Driver</label>

							<input type="radio" name="user_role" value="6"><label>Police Sergeant</label>
							<span class="error_message">{{ $errors->first('user_role')}} </span>
						</div>
						<br>
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
      <div class="modal-footer login_model_footer"> 
      </div>
    </div>
  </div>
</div>





	@yield('content')





 
	 
		<div class="footer"> 
			<div class="footer_section clear">
				<div class="container">
					<div class="row">
						<div class="col-sm-3 col-gm-3 col-cm-3">
							<div class="footer_content_wrap">
								<div class="footer_contentf_heading">
									<h5>Important Links</h5>
								</div>
								<div class="footer_content">
									<ul>
										<li>
											<span><i class="fa fa-check"></i></span>
											<a href="bdcms_contact.html">BDCMS office information.</a>
										</li>
										
										<li>
											<span><i class="fa fa-check"></i></span>
											<a href="#">Bd Jobs.com.</a>
										</li>
										<li>
											<span><i class="fa fa-check"></i></span>
											<a href="#">Govtment job circuler.</a>
										</li>
										<li>
											<span><i class="fa fa-check"></i></span>
											<a href="#">Bangladesh Passport Office.</a>
										</li>
										<li>
											<span><i class="fa fa-check"></i></span>
											<a href="{{URL::to('/Help')}}">Help</a>
										</li>
									</ul>
								</div>
							</div>	
						</div>
						<div class="col-sm-3 col-gm-3 col-cm-3">
							<div class="footer_content_wrap">
								<div class="footer_contentf_heading">
									<h5>Menu</h5>
								</div>
								<div class="footer_content">
									<ul>
				                      <li>
				                        <a href="{{url::to('/user_login')}}">Upazila/Zilla Login</a>
				                      </li> 
				                      <li> 
											<a href="{{URL::to('/driverSignup')}}">Driver sign up</a>
										</li>
				                    </ul>
								</div>
							</div>
						</div>
						<div class="col-sm-3 col-gm-3 col-cm-3">
							<div class="footer_content_wrap">
								<div class="footer_contentf_heading">
									<h5>Contact Information</h5>
								</div>
								<div class="footer_content"> 
									<div class="w3-address-grid">
										<div class="w3-address-left">
											<i class="fa fa-phone" aria-hidden="true"></i>
										</div>
										<div class="w3-address-right">
											<span>Phone Number</span>
											<p>1931039338</p>
										</div>
										<div class="clearfix"> </div>
									</div>
									<div class="w3-address-grid">
										<div class="w3-address-left">
											<i class="fa fa-envelope" aria-hidden="true"></i>
										</div>
										<div class="w3-address-right">
											<span>Email Address</span>
											<p>Email : csenazmul96@gmail.com</p>
										</div>
										<div class="clearfix"> </div>
									</div>
									<div class="w3-address-grid">
										<div class="w3-address-left">
											<i class="fa fa-map-marker" aria-hidden="true"></i>
										</div>
										<div class="w3-address-right">
											<span>Location</span>
											<p>Sonadanga 12-173 R/A Khulna</p>
										</div>
										<div class="clearfix"> </div>
									</div> 
							 
								</div>
							</div>	
						</div>
						<div class="col-sm-3 col-gm-3 col-cm-3"> 
							<div class="footer_content_wrap">
								<div class="footer_contentf_heading">
									<h5>Contact Form</h5>
								</div>
								<div class="footer_content">
									<form action="/action_page.php">
					                    <div class="form-group"> 
					                        <input type="text" class="form-control" id="text" placeholder="Name...">
					                    </div>
					                    <div class="form-group"> 
					                        <input type="email" class="form-control" id="email" placeholder="Email...">
					                    </div>
					                    <div class="form-group"> 
					                        <textarea class="form-control" rows="3"  placeholder="Message..."></textarea>
					                    </div> 
					                    <button type="submit" class="btn btn-primary">Submit</button>
					                </form>
								</div>
							</div>
						</div> 
					</div> 
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6">
							<div class="copy_right"> 
								<p>Last Update - 5th May-2018 || &copy; Copy <a href=""> Bangladesh Traffic Management System.</a></p>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6">
							<div class="copy_right"> 
								<p>Design & Develp By || <a href=""> B.S.C in CSE-2018 Student of North Western University, Khulna</a></p>
							</div>
						</div>
					</div>
				</div> 
			</div> 
		</div>
		
		
		<script src="{{url('public/Frontend')}}/js/jquery.js"></script>
		<script src="{{url('public/Frontend')}}/js/bootstrap.min.js"></script> 
		<script src="{{url('public/Frontend')}}/js/jquery.dataTables.min.js"></script> 
		<script src="{{url('public/Frontend')}}/js/dataTables.bootstrap.min.js"></script>  
		<script src="{{url('public/Frontend')}}/js/jquery-ui.min.js" type="text/javascript"></script>
		<script src="{{url('public/Frontend')}}/js/custom.js" type="text/javascript"></script>
		<script src="{{url('public/Frontend')}}/js/superfish.js" type="text/javascript"></script>
		<script src="{{url('public/Frontend')}}/js/jquery.meanmenu.js" type="text/javascript"></script>
		<script src="{{url('public/Frontend')}}/js/skill/jquery.inview.js"></script>   
		<script src="{{url('public/Frontend')}}/js/skill/jquery.easy-pie-chart.js"></script>
		<script src="{{url('public/Frontend')}}/js/skill/resume-custom.js"></script>  
		<script src="{{URL::to('public/Backend/js/bootbox.js')}}"></script>

	 
		<script type="text/javascript">
			$('#car_metro').keyup(function(){
				//console.log('check');
				var area = $(this).val();
				if(area != ''){
					$.ajax({
						url:"{{ url('/area_search') }}",
						method:"POST",
						data:{area:area, _token:'{{csrf_token()}}'},
						success:function(data){
							$('#areatatus').fadeIn();
							$('#areatatus').html(data);
							//console.log(data);
						}
					});
				}
			$(document).on('click','li',function(){
				$('#car_metro').val($(this).text());
				$('#areatatus').fadeOut();
			});
			});


			$('#keyword').keyup(function(){
				//console.log('check');
				var keyword = $(this).val();
				if(keyword != ''){
					$.ajax({
						url:"{{ url('/key_search') }}",
						method:"POST",
						data:{keyword:keyword, _token:'{{csrf_token()}}'},
						success:function(data){
							$('#keystatus').fadeIn();
							$('#keystatus').html(data);
							//console.log(data);
						}
					});
				}
			$(document).on('click','span',function(){
				$('#keyword').val($(this).closest("div").text());
				$('#keystatus').fadeOut();
			});  
			});

		</script>

		 <script type="text/javascript">
		    $(document).on("click", "#CaseSubmit", function(e){
		        e.preventDefault();
		        var link = $(this).attr("href");
		        bootbox.confirm("Do you want to submit this case !!", function(confirmed){
		          if(confirmed){
		            window.location.href = "{{ url('/case_submit') }}";
		          };
		        });
		    });
		  </script>

		  


	</body>
</html>