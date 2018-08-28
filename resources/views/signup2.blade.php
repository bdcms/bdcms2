@extends('master.master')
@section('content')
	<section class="section_class">
		<div class="container">
			<div class="row"> 
				<div class="col-lg-8 col-md-8 col-sm-6 col-xs-12"> 
					 
					<div class="clear">
						<div class="section_heading section_content">
							<h4>Application Step-final</h4>
						</div>
						<div class="section_content section_content signup_section">
							<form class="form-horizontal" action="{{url('appfrom3/')}}" method="post" enctype="multipart/form-data">
								<p>Car Photo</p>
								 
								<div class="control-group">
								    <label class="control-label">Car Photo:</label>
								    <div class="controls">
								    	<input type="file" name="car_pic" >
								    	<span class="err-msg text-danger">{{$errors->first('car_pic')}}</span>
								    	<span> ( jpg,png,jpeg ) format are allow & file shold be less than 100kB.</span>
								    </div>
								</div>

								<p>Profile Photo</p>
								 {{csrf_field()}}
								<div class="control-group">
								    <label class="control-label">Profile Photo:</label>
								    <div class="controls">
								    	<input type="file" name="image" >
								    	<span class="err-msg text-danger">{{$errors->first('image')}}</span>
								    	<span> ( jpg,png,jpeg ) format are allow & file shold be less than 100kB.</span>
								    </div>
								</div>
								<p>Upload all document</p> 
								 
								<div class="control-group">
								    <label class="control-label">All document's PDF:</label>
								    <div class="controls">
								    	<input type="file" name="document_pdf"  placeholder="Documents number">
								    	<span class="err-msg text-danger">{{$errors->first('document_pdf')}}</span>
								    	<span> ( scan a single PDF file by combind Driving Lisence, Road Permit, Insurence, Fitness certificate ) file shold be less than 250kB.</span>
								    </div>
								</div> 

								



								  <div class="control-group">
								  	 <label class="control-label"> </label>
								    <div class="controls"> 
								    	<a href="signup2.html">Previous Step</a>
								      <!-- <button class="signinbtn" type="reset" class="btn">Reset</button> -->
								      <button class="signinbtn" type="submit" class="btn">Complete</button>
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
	@endsection