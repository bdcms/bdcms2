@extends('master.admin_layout')
@section('content')
@if (session('msg'))
    <div class="alert success_alrt_msg">
        {{ session('msg') }}
        <button type="button" class="close" data-dismiss="alert">×</button>
    </div>
@endif
<ul class="breadcrumb">
	<li>
		<i class="icon-home"></i>
		<a href="index.html">Home</a> 
		<i class="icon-angle-right"></i>
	</li>
	<li><a href="#">Setting</a></li>
	</ul>

<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-content">		
		 


		<form class="form-horizontal" action="{{ url('/upazila_setting_update') }}" method="post" enctype="multipart/form-data">
				 {{csrf_field()}}
				<p>Profile information</p> 

				<div class="control-group">
					<div class="col-md-2 col-lg-2 col-sm-3 col-xsm-12"> 
				    	<label class="control-label"> Profile Name:</label>
					</div>
					<div class="col-md-10 col-lg-10 col-sm-9 col-xsm-12">
					    <div class="controls">
					    	<input type="hidden" name="id" value="{{$allinfo->uzl_id}}">
					    	<input type="text" name="name"  placeholder="Car Sasis number" value="@if(isset($allinfo->uzl_name)) {{$allinfo->uzl_name}} @endif" class=""> 
					    	<span class="err-msg text-danger">{{$errors->first('name')}}</span>
						</div> 
					</div>
				</div> 
				<div class="control-group">
					<div class="col-md-2 col-lg-2 col-sm-3 col-xsm-12"> 
				    	<label class="control-label"> Profile Email:</label>
					</div>
					<div class="col-md-10 col-lg-10 col-sm-9 col-xsm-12">
					    <div class="controls">
					    	<input type="text" name="email"  placeholder="Car Sasis number" value="@if(isset($allinfo->uzl_email)) {{$allinfo->uzl_email}} @endif" class=""> <span class="err-msg text-danger">{{$errors->first('email')}}</span>
						</div> 
					</div>
				</div> 
				<div class="control-group">
					<div class="col-md-2 col-lg-2 col-sm-3 col-xsm-12"> 
				    	<label class="control-label"> Contact Number:</label>
					</div>
					<div class="col-md-10 col-lg-10 col-sm-9 col-xsm-12">
					    <div class="controls">
					    	<input type="text" name="number"  placeholder="Car Sasis number" value="@if(isset($allinfo->uzl_mobile)) {{$allinfo->uzl_mobile}} @endif" class=""> <span class="err-msg text-danger">{{$errors->first('number')}}</span>
						</div> 
					</div>
				</div> 
				<div class="control-group">
					<div class="col-md-2 col-lg-2 col-sm-3 col-xsm-12"> 
				    	<label class="control-label"> Current City:</label>
					</div>
					<div class="col-md-10 col-lg-10 col-sm-9 col-xsm-12">
					    <div class="controls">
					    	<input type="text" name="city" id="car_metro"  placeholder="Car Sasis number" value="@if(isset($city->metro_name)) {{$city->metro_name}} @endif"  onchange="distirct_existing_check();"> 
					    	<div id="areatatus" style="width:30%; overflow: hidden;"></div> 
							<div id="car_metro_error_msg"  style="color:#F00; float: left;"> </div>
					    	<span class="err-msg text-danger">{{$errors->first('city')}}</span>
						</div> 
					</div>
				</div> 
				<div class="control-group">
					<div class="col-md-2 col-lg-2 col-sm-3 col-xsm-12"> 
				    	<label class="control-label"> Address:</label>
					</div>
					<div class="col-md-10 col-lg-10 col-sm-9 col-xsm-12">
					    <div class="controls">
					    	<input type="text" name="address"  placeholder="Car Sasis number" value="@if(isset($allinfo->uzl_address)) {{$allinfo->uzl_address}} @endif" class=""> 
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
					    	<input type="hidden" name="image"   value="@if(isset($allinfo->uzl_picture)) {{$allinfo->uzl_picture}} @endif" > 
					    	<img style="width: 150px;" src="@if(isset($allinfo->uzl_picture)) {{$allinfo->uzl_picture}} @endif" alt="image">
						</div> 
					</div>
				</div>
				<div class="control-group">
					<div class="col-md-2 col-lg-2 col-sm-3 col-xsm-12"> 
				    	<label class="control-label"> </label>
					</div>
					<div class="col-md-10 col-lg-10 col-sm-9 col-xsm-12">
					    <div class="controls">
					    	<button type="submit" class="btn btn-primary">Update</button>
						</div> 
					</div>
				</div> 
				 
			</form>

	</div><!--/row-->
	</div><!--/row-->
	</div><!--/row-->

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
</script>
@endsection