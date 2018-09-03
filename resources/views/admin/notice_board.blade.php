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
	<a href="#">Notice</a>
</li>
</ul>
@if (session('msg'))
    <div class="alert alert-success">
        {{ session('msg') }}
        <button type="button" class="close" data-dismiss="alert">×</button>
    </div>
@endif
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
		<form class="form-horizontal" action="{{URL('/create_notice')}}" method="POST">
			{{csrf_field()}} 
		  <fieldset>
		  	<div class="control-group">
				<label class="control-label" for="focusedInput">Profile Name<span style="color:red;">*</span></label>
				<div class="controls">
				  <input class="input-xlarge focused" name="not_name" type="text" value="{{Request::old('not_name')}}" placeholder="Notice Name">
				  <span class="error_message">{{ $errors->first('not_name')}} </span>
				</div>
			</div> 

			

			<div class="control-group hnameden-phone">
			  <label class="control-label" for="textarea2">Address<span style="color:red;">*</span></label>
			  <div class="controls">
				<textarea class="cleditor" name="not_desc" rows="3"> {{Request::old('not_desc')}} </textarea>
				<span class="error_message">{{ $errors->first('not_desc')}} </span>
			  </div>
			</div> 

			{{-- <div class="control-group">
			  <label class="control-label" for="fileInput">File input</label>
			  <div class="controls">
				<input class="input-file uniform_on" id="fileInput" type="file">
			  </div>
			</div> --}}

			  
			 
			<div class="form-actions">
			  <button type="submit" class="btn btn-primary">Save</button>
			  <button type="reset" class="btn">Cancel</button>
			</div>
		  </fieldset>
		</form>   

	</div>
</div><!--/span-->
<div class="box span12">
		<div class="box-header" data-original-title> 

			<h2><i class="halflings-icon user"></i><span class="break"></span>New Available Cars Apllication Forms</h2>
			<div class="box-icon">
				<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
				<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
				<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
			</div>
		</div>
		<div class="box-content">
			 
			<table class="table table-striped table-bordered bootstrap-datatable datatable">
			  <thead>
				  <tr>
					  <th>Srial No</th>
					  <th>Metro</th>
					  <th>Description</th> 
					  <th>Creator</th> 
					  <th>Actions</th>
				  </tr>
			  </thead>   
			  <tbody>
			  		<?php $i=0;?>
			  	 	@foreach($notices as $notice)
			  	 	<?php $i++;?>
				  	 	<tr>
							<td>{{$i}}</td>
							<td class="center">{{$notice->not_name}}</td>
							<td class="center">{{$notice->not_desc}}</td> 
							<td class="center">{{strip_tags($notice->not_desc)}}</td> 
							<td class="center">
								<a class="btn btn-success" href="{{URL::to("/ApplicationSingle/$notice->not_id")}}">
									<i class="halflings-icon white zoom-in"></i>  
								</a> 
								<a class="btn btn-danger" id="Delete" href="{{URL::to("/notice_delete/$notice->not_id")}}">
									<i class="halflings-icon white trash"></i> 
								</a>
							</td>
						</tr>
					@endforeach

			  </tbody>
		  </table>            
		</div>
	</div><!--/span-->

</div><!--/row-->
 
@endsection 