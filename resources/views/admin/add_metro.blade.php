@extends('master.admin_layout')
@section('content') 
<?php if($msg = Session::get('message')): $class = Session::get('class'); if($class=='alert alert-success'){$snap='Well done! ';}else{$snap='Oh snap! ';}?> 
 	<div class="{{$class}} success_alrt_msg">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>{{$snap}}</strong> {{$msg}}
	</div> 
<?php Session::put('message',null); endif; ?>
@if (session('msg'))
    <div class="alert alert-success">
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
	<li><a href="#">Car Metro</a></li>
</ul>

<div class="row-fluid sortable">
	<div class="box span6">
		<div class="box-content">
			<form class="form-horizontal" action="{{URL('/add_metro')}}" method="POST">
				{{csrf_field()}} 
			  <fieldset>
			  	<div class="control-group">
					<label style="width:20%;margin-right:5px;" class="control-label" for="focusedInput">Metro Name<span style="color:red;">*</span></label>
					<div class="controls" style="margin-left: 10px;">
					  <input class="input-xlarge metro_name focused" name="metro_name" id="metro_name" type="text" value="{{Request::old('metro_name')}}" placeholder="metro" onchange="add_metro_check();">
					  <span class="error_message">{{ $errors->first('metro_name')}} </span>
					  <div id="metro_name_error_msg"  style="color:#F00;font-weight:800"> </div>
					</div>
				</div>  

				<div class="control-group hnameden-phone">
				  <label style="width:20%;margin-right:5px;" class="control-label" for="textarea2">Description </label>
				  <div class="controls" style="margin-left: 10px;">
					<textarea class="cleditor" name="metor_desc" rows="3"> {{Request::old('metor_desc')}} </textarea>
					<span class="error_message">{{ $errors->first('metor_desc')}} </span>
				  </div>
				</div> 
				<div class="form-actions">
				  <button type="submit" class="btn btn-primary">Add Metro</button>
				  <button type="reset" class="btn">Cancel</button>
				</div>
			  </fieldset>
			</form>  
		</div>
	</div>
	<div class="box span6">
		<div class="box-content">
			<form class="form-horizontal" action="{{URL('/add_keyword')}}" method="POST">
				{{csrf_field()}} 
			  <fieldset>
			  	<div class="control-group">
					<label style="width:20%;margin-right:5px;" class="control-label" for="focusedInput">Keyword<span style="color:red;">*</span></label>
					<div class="controls" style="margin-left: 10px;">
					  <input class="input-xlarge keyword_name metro_name focused" name="keyword_name" id="keyword_name" type="text" value="{{Request::old('keyword_name')}}" placeholder="keyword" onchange="add_keyword_check();">
					  <span class="error_message">{{ $errors->first('keyword_name')}} </span>
					  <div id="keyword_name_error_msg"  style="color:#F00;font-weight:800"> </div>
					</div>
				</div>  

				<div class="control-group hnameden-phone">
				  <label style="width:20%;margin-right:5px;" class="control-label" for="textarea2">Description </label>
				  <div class="controls" style="margin-left: 10px;">
					<textarea class="cleditor" name="keyword_desc" rows="3"> {{Request::old('keyword_desc')}} </textarea>
					<span class="error_message">{{ $errors->first('keyword_desc')}} </span>
				  </div>
				</div> 
				<div class="form-actions">
				  <button type="submit" class="btn btn-primary">Add Metro</button>
				  <button type="reset" class="btn">Cancel</button>
				</div>
			  </fieldset>
			</form>  
		</div>
	</div>
</div>
<div class="row-fluid sortable">		
	<div class="box span6">
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
					  <th>ID No</th>
					  <th>Metro</th>
					  <th>Description</th> 
					  <th>Actions</th>
				  </tr>
			  </thead>   
			  <tbody>
			  		<?php $i=0;?>
			  	 	@foreach($metros as $metro)
			  	 	<?php $i++;?>
				  	 	<tr>
							<td>{{$i}}</td>
							<td class="center">{{$metro->metro_name}}</td>
							<td class="center">{{$metro->metro_desc}}</td> 
							<td class="center"> 
								<a class="btn btn-danger" id="Delete" href="{{URL::to("/metro_delete/$metro->metro_id")}}">
									<i class="halflings-icon white trash"></i> 
								</a>
							</td>
						</tr>
					@endforeach

			  </tbody>
		  </table>            
		</div>
	</div><!--/span-->
	<div class="box span6">
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
					  <th>ID No</th>
					  <th>Metro</th>
					  <th>Description</th> 
					  <th>Actions</th>
				  </tr>
			  </thead>   
			  <tbody>
			  		<?php $i=0;?>
			  	 	@foreach($keywords as $keyword)
			  	 	<?php $i++;?>
				  	 	<tr>
							<td>{{$i}}</td>
							<td class="center">{{$keyword->key_name}}</td>
							<td class="center">{{$keyword->key_desc}}</td> 
							<td class="center"> 
								<a class="btn btn-danger" id="Delete" href="{{URL::to("/keyword_delete/$keyword->key_id")}}">
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
<script> 

function add_metro_check(){ 
	var metro_name = $('#metro_name').val();
	var metro_name = $.trim(metro_name);
	$.ajax({
		type: 'get',
		data: 'metro_name='+metro_name,
		url: '<?php echo url('check_add_metro_name'); ?>',
		success: function(responseText){  
			if(responseText==1){  //already exist
				//alert("This Email Id Already Exist");
				$("#exist").val("1"); //already exist
				$("#metro_name").css('box-shadow', '2px 0px 0px 0px red'); 
				$('#metro_name_error_msg').html("Metro  Already Exist.");	
				$("#metro_name").focus();
				return false;				   
			}else if(responseText==0){
			    $("#exist").val("0");
				$("#metro_name").css('border', '');
				$('#metro_name_error_msg').html("");	
			}
		}		
	});	
}

function add_keyword_check(){ 
	var keyword_name = $('#keyword_name').val();
	var keyword_name = $.trim(keyword_name);
	$.ajax({
		type: 'get',
		data: 'keyword_name='+keyword_name,
		url: '<?php echo url('check_add_keyword_name'); ?>',
		success: function(responseText){  
			if(responseText==1){  //already exist
				//alert("This Email Id Already Exist");
				$("#exist").val("1"); //already exist
				$("#keyword_name").css('box-shadow', '2px 0px 0px 0px red'); 
				$('#keyword_name_error_msg').html("keyword  Already Exist.");	
				$("#keyword_name").focus();
				return false;				   
			}else if(responseText==0){
			    $("#exist").val("0");
				$("#keyword_name").css('border', '');
				$('#keyword_name_error_msg').html("");	
			}
		}		
	});	
}
 

</script>
@endsection