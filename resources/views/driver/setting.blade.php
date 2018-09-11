@extends('master.front_user_layout')
@section('content')

 

@if (session('msg'))
    <div class="alert alert-success">
        {{ session('msg') }}
        <button type="button" class="close" data-dismiss="alert">×</button>
    </div>
@endif

 

 
			
<div class="row">
	<div class="col-lg-1 col-md-1"></div>
	<div class="col-lg-10 col-md-10">
		<div class="float_width">
			<div class="section_content">
				<div class="box-content driver_profile_setting"> 

		 			 <form class="form-horizontal" action="{{ url('/driver_info_update') }}" method="post" enctype="multipart/form-data">
						 {{csrf_field()}} 
						 <div class="control-group">
							<div class="col-md-2 col-lg-2 col-sm-3 col-xsm-12"> 
						    	<label class="control-label">Public Status:</label>
							</div>
							<div class="col-md-10 col-lg-10 col-sm-9 col-xsm-12">
							    <div class="controls">
							    	@if(isset($driver_info->pub_status))
		 							@if($driver_info->pub_status==1)
		 							<span style="color: green; font-size: 16px;font-weight: bold;line-height: 50px;">Approved</span>
		 							@else
		 							<span style="color: red; font-size: 16px;font-weight: bold;line-height: 50px;">UnApproved</span>
		 							@endif
		 						@endif
								</div> 
							</div>
						</div>
						<div class="control-group">
							<div class="col-md-2 col-lg-2 col-sm-3 col-xsm-12"> 
						    	<label class="control-label"> Profile Name:</label>
							</div>
							<div class="col-md-10 col-lg-10 col-sm-9 col-xsm-12">
							    <div class="controls">
							    	<input type="hidden" name="id" value="{{$driver_info->dri_id}}">
							    	<input type="text" name="name"  class="form-control" value="@if(isset($driver_info->dri_name)){{$driver_info->dri_name}} @endif" class=""> 
							    	<span class="err-msg text-danger">{{$errors->first('name')}}</span>
								</div> 
							</div>
						</div> 
						<div class="control-group">
							<div class="col-md-2 col-lg-2 col-sm-3 col-xsm-12"> 
						    	<label class="control-label">Father Name:</label>
							</div>
							<div class="col-md-10 col-lg-10 col-sm-9 col-xsm-12">
							    <div class="controls"> 
							    	<input type="text" name="fname"  class="form-control" value="@if(isset($driver_info->dri_fname)){{$driver_info->dri_fname}} @endif" class=""> 
							    	<span class="err-msg text-danger">{{$errors->first('fname')}}</span>
								</div> 
							</div>
						</div>
						<div class="control-group">
							<div class="col-md-2 col-lg-2 col-sm-3 col-xsm-12"> 
						    	<label class="control-label"> Profile Email:</label>
							</div>
							<div class="col-md-10 col-lg-10 col-sm-9 col-xsm-12">
							    <div class="controls">
							    	<input type="text" name="email"  class="form-control" value="@if(isset($driver_info->dri_email)){{$driver_info->dri_email}} @endif" class=""> <span class="err-msg text-danger">{{$errors->first('email')}}</span>
								</div> 
							</div>
						</div> 
						<div class="control-group">
							<div class="col-md-2 col-lg-2 col-sm-3 col-xsm-12"> 
						    	<label class="control-label"> Contact Number:</label>
							</div>
							<div class="col-md-10 col-lg-10 col-sm-9 col-xsm-12">
							    <div class="controls">
							    	<input type="text" name="number"  class="form-control" value="@if(isset($driver_info->dri_mobile)){{$driver_info->dri_mobile}}@endif" class=""> <span class="err-msg text-danger">{{$errors->first('number')}}</span>
								</div> 
							</div>
						</div> 
						<div class="control-group">
							<div class="col-md-2 col-lg-2 col-sm-3 col-xsm-12"> 
						    	<label class="control-label">Address:</label>
							</div>
							<div class="col-md-10 col-lg-10 col-sm-9 col-xsm-12">
							    <div class="controls">
							    	<input type="text" name="address"  class="form-control" value="@if(isset($driver_info->dri_address)){{$driver_info->dri_address}} @endif "> 
							    	<span class="err-msg text-danger">{{$errors->first('address')}}</span>
								</div> 
							</div>
						</div>
						<div class="control-group">
							<div class="col-md-2 col-lg-2 col-sm-3 col-xsm-12"> 
						    	<label class="control-label"> Current City:</label>
							</div>
							<div class="col-md-10 col-lg-10 col-sm-9 col-xsm-12">
							    <div class="controls">
							    	<input type="text" name="city" class="form-control" value="@if(isset($city)){{$city}}@endif" disabled>  
								</div> 
							</div>
						</div> 
						<div class="control-group">
							<div class="col-md-2 col-lg-2 col-sm-3 col-xsm-12"> 
						    	<label class="control-label"> Current Car No:</label>
							</div>
							<div class="col-md-10 col-lg-10 col-sm-9 col-xsm-12">
							    <div class="controls">
							    	<input type="text" name="car_no" class="form-control" value="@if(isset($car)){{$car}} @endif" disabled>  
								</div> 
							</div>
						</div>

						
						<div class="control-group">
							<div class="col-md-2 col-lg-2 col-sm-3 col-xsm-12"> 
						    	<label class="control-label">Date of Birth:</label>
							</div>
							<div class="col-md-10 col-lg-10 col-sm-9 col-xsm-12">
							    <div class="controls">
							    	<input type="text" name="birth" class="form-control" value="@if(isset($driver_info->dri_birthday)){{$driver_info->dri_birthday}} @endif" disabled> 
							    	
								</div> 
							</div>
						</div>
						<div class="control-group">
							<div class="col-md-2 col-lg-2 col-sm-3 col-xsm-12"> 
						    	<label class="control-label">Gender:</label>
							</div>
							<div class="col-md-10 col-lg-10 col-sm-9 col-xsm-12">
							    <div class="controls">
							    	<input type="text" name="city" class="form-control" value="@if(isset($driver_info->dri_gender)){{$driver_info->dri_gender}} @endif" disabled> 
							    	
								</div> 
							</div>
						</div>
						
						<div class="control-group">
							<div class="col-md-2 col-lg-2 col-sm-3 col-xsm-12"> 
						    	<label class="control-label">Passport No:</label>
							</div>
							<div class="col-md-10 col-lg-10 col-sm-9 col-xsm-12">
							    <div class="controls">
							    	<input type="text" name="passport" class="form-control" value="@if(isset($driver_info->dri_passport)){{$driver_info->dri_passport}} @endif" disabled> 
							    	
								</div> 
							</div>
						</div>
						<div class="control-group">
							<div class="col-md-2 col-lg-2 col-sm-3 col-xsm-12"> 
						    	<label class="control-label">Licence No:</label>
							</div>
							<div class="col-md-10 col-lg-10 col-sm-9 col-xsm-12">
							    <div class="controls">
							    	<input type="text" name="licence"  class="form-control" value="@if(isset($driver_info->dri_lisence)){{$driver_info->dri_lisence}} @endif" disabled> 
							    	
								</div> 
							</div>
						</div>
						<div class="control-group">
							<div class="col-md-2 col-lg-2 col-sm-3 col-xsm-12"> 
						    	<label class="control-label">NID No:</label>
							</div>
							<div class="col-md-10 col-lg-10 col-sm-9 col-xsm-12">
							    <div class="controls">
							    	<input type="text" name="nid"  class="form-control" value="@if(isset($driver_info->dri_nid)){{$driver_info->dri_nid}} @endif" disabled> 
							    	
								</div> 
							</div>
						</div>
						<div class="control-group">
							<div class="col-md-2 col-lg-2 col-sm-3 col-xsm-12"> 
						    	<label class="control-label">Joining Date:</label>
							</div>
							<div class="col-md-10 col-lg-10 col-sm-9 col-xsm-12">
							    <div class="controls">
							    	<input type="text" name="city"  class="form-control" value="@if(isset($driver_info->dri_joining_date)){{$driver_info->dri_joining_date}} @endif"  disabled> 
							    	
								</div> 
							</div>
						</div> 
						 <div class="control-group">
							<div class="col-md-2 col-lg-2 col-sm-3 col-xsm-12"> 
						    	<label class="control-label"> Image:</label>
							</div>
							<div class="col-md-10 col-lg-10 col-sm-9 col-xsm-12">
							    <div class="controls">
							    	<input type="file" name="file"  >
							    	<span class="err-msg text-danger">{{$errors->first('file')}}</span> 
								</div> 
							</div>
						</div>
						<div class="control-group">
							<div class="col-md-2 col-lg-2 col-sm-3 col-xsm-12"> 
						    	<label class="control-label"> </label>
							</div>
							<div class="col-md-10 col-lg-10 col-sm-9 col-xsm-12">
							    <div class="controls">
							    	<input type="hidden" name="image"   value="@if(isset($driver_info->dri_profile_pic)) {{$driver_info->dri_profile_pic}} @endif" > 
							    	<img style="width: 150px;" src="@if(isset($driver_info->dri_profile_pic)) {{$driver_info->dri_profile_pic}} @endif" alt="image">
								</div> 
							</div>
						</div>
						<div class="control-group">
							<div class="col-md-2 col-lg-2 col-sm-3 col-xsm-12"> 
						    	<label class="control-label"> </label>
							</div>
							<div class="col-md-10 col-lg-10 col-sm-9 col-xsm-12">
							    <div class="controls">
							    	<button type="submit" class="btn btn-primary">Profile Update</button>
								</div> 
							</div>
						</div> 
						 
					</form>
				<div class="clearfix"></div>
				</div>
			</div>	
		</div>
	</div>	
</div><!--/row-->
 
@endsection