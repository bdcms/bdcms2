@extends('master.admin_layout')
@section('content')
<ul class="breadcrumb">
<li>
	<i class="icon-home"></i>
	<a href="index.html">Home</a>
	<i class="icon-angle-right"></i> 
</li>
<li>
	<i class="icon-edit"></i>
	<a href="#">Create User</a>
</li>
</ul>

<div class="row-fluid sortable">
<div class="box span12">
	<div class="box-header" data-original-title>
		<h2><i class="halflings-icon edit"></i><span class="break"></span>Opening a new user profile</h2>
		<div class="box-icon">
			<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
			<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
			<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
		</div>
	</div>
	<div class="box-content">
		<form class="form-horizontal" action="{{URL('/OpeningNewProfile')}}" method="POST">
			{{csrf_field()}} 
		  <fieldset>
		  	<div class="control-group">
				<label class="control-label" for="focusedInput">Profile Name</label>
				<div class="controls">
				  <input class="input-xlarge focused" name="user_name" type="text" value="{{Request::old('user_name')}}" placeholder="Name">
				  <span class="error_message">{{ $errors->first('user_name')}} </span>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="focusedInput">F Name</label>
				<div class="controls">
				  <input class="input-xlarge focused" name="user_fname" type="text" value="{{Request::old('user_fname')}}" placeholder="Name">
				  <span class="error_message">{{ $errors->first('user_fname')}} </span>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="focusedInput">Profile Email</label>
				<div class="controls">
				  <input class="input-xlarge focused" name="user_email" type="email" value=" {{Request::old('user_email')}}" placeholder="Email">
				  <span class="error_message">{{ $errors->first('user_email')}} </span>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="focusedInput">Profile Number</label>
				<div class="controls">
				  <input class="input-xlarge focused" name="user_mobile" type="number" value="{{Request::old('user_mobile')}}" placeholder="Contact number">
				  <span class="error_message">{{ $errors->first('user_mobile')}} </span>
				</div>
			</div>

			<div class="control-group hnameden-phone">
			  <label class="control-label" for="textarea2">Address</label>
			  <div class="controls">
				<textarea class="cleditor" name="user_address" rows="3"> {{Request::old('user_address')}} </textarea>
				<span class="error_message">{{ $errors->first('user_address')}} </span>
			  </div>
			</div>
			<div class="control-group">
				<label class="control-label" for="selectError">Select Role</label>
				<div class="controls">
				  <select name="role_id" data-rel="chosen">
					<option value="">Select One</option>
					<option value="4">Upazila Admin</option>
					<option value="5">Police Surgent</option> 
				  </select>
				  <span class="error_message">{{ $errors->first('role_id')}} </span>
				</div>
			  </div>

			<div class="control-group">
			  <label class="control-label" for="typeahead">Working Area </label>
			  <div class="controls">
				<input type="text" class="span6 typeahead" name="user_posting"  data-provide="typeahead" data-items="4" data-source='["Khulna","Dhaka","Bagerhat","Jessore"]'  value="{{Request::old('user_posting')}}"> 
				<span class="error_message">{{ $errors->first('user_posting')}} </span>
			  </div>
			</div>

			 <div class="control-group">
			 	<label class="control-label" for="typeahead">Select Gender </label>
			 		<div class="controls">
					  <label class="radio">  

							<input type="radio" value="1" name="user_gender">Male
					  </label>

					  <div style="clear:both"></div>

					  <label class="radio"> 
							<input type="radio" value="2" name="user_gender"> Female
					  </label>
					  <span class="error_message">{{ $errors->first('user_posting')}} </span>
					 </div>
				</div>
			 
			<div class="form-actions">
			  <button type="submit" class="btn btn-primary">Create Profile</button>
			  <button type="reset" class="btn">Cancel</button>
			</div>
		  </fieldset>
		</form>   

	</div>
</div><!--/span-->

</div><!--/row-->
@endsection