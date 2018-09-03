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
		<form class="form-horizontal" action="{{URL('/newrole')}}" method="POST">
			{{csrf_field()}} 
		  <fieldset>
		  	<div class="control-group">
				<label class="control-label" for="focusedInput">Profile Name<span style="color:red;">*</span></label>
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
				<label class="control-label" for="selectError">Select Role<span style="color:red;">*</span></label>
					<div class="controls">
						<select name="role_id" label="some opts" id="opts" onchange="showdv(this,'Admin','Surgent');" >
						    <option >Select one</option>
						    <option value="4">Zilla Admin</option>
						    <option value="5">Upazila Admin</option>
						    <option value="6" >Police Surgent</option>
						</select>
					</div>
				</div>

			 
 
			<div class="control-group" id="codFiscaleField" style="display:none;">
				<label class="control-label" for="focusedInput">Identity Number<span style="color:red;">*</span></label>
				<div class="controls">
					<input name="user_identity" type="text" id="identity" class="input-xlarge identity focused" value="{{Request::old('user_fname')}}" label="ob-codFiscale" helpMessage="ob-help-codFiscale" onchange="identity_check();"> 
				  <span class="error_message">{{ $errors->first('user_fname')}} </span>
				  <div id="identity_error_msg"  style="color:#F00;font-weight:800 ;font-size:12px"> </div>
				</div>
			</div>


			<div class="control-group" id="codFiscaleField2" style="display:none;">
				<label class="control-label" for="focusedInput">NID No<span style="color:red;">*</span></label>
				<div class="controls">
					<input name="user_nid" id="user_nid" type="text" class="input-xlarge user_nid focused" value="{{Request::old('user_fname')}}" label="ob-codFiscale" helpMessage="ob-help-codFiscale" onchange="user_nid_check();"> 
				  	<span class="error_message">{{ $errors->first('user_fname')}} </span>
				  	<div id="user_nid_error_msg"  style="color:#F00; font-weight:800 ;font-size:12px"> </div>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="focusedInput">Profile Email<span style="color:red;">*</span></label>
				<div class="controls">
				  <input class="input-xlarge user_email focused" id="user_email"name="user_email" type="email" value=" {{Request::old('user_email')}}" placeholder="Email" onchange="user_email_check();">
				  <span class="error_message">{{ $errors->first('user_email')}} </span>
				  <div id="user_email_error_msg"  style="color:#F00;font-weight:800 ;font-size:12px"> </div>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="focusedInput">Profile Number<span style="color:red;">*</span></label>
				<div class="controls">
				  <input class="input-xlarge user_number focused" id="user_number" name="user_mobile" type="number" value="{{Request::old('user_mobile')}}" placeholder="Contact number" onchange="user_number_check();">
				  <span class="error_message">{{ $errors->first('user_mobile')}} </span>
				  <div id="user_number_error_msg"  style="color:#F00;font-weight:800 ;font-size:12px"> </div>
				</div>
			</div>

			

			<div class="control-group hnameden-phone">
			  <label class="control-label" for="textarea2">Address<span style="color:red;">*</span></label>
			  <div class="controls">
				<textarea class="cleditor" name="user_address" rows="3"> {{Request::old('user_address')}} </textarea>
				<span class="error_message">{{ $errors->first('user_address')}} </span>
			  </div>
			</div>

			<div class="control-group hnameden-phone">
			  <label class="control-label" for="date01">Date of Birth<span style="color:red;">*</span></label>
			  <div class="controls">
				<input type="text" class="input-xlarge datepicker hasDatepicker" name="user_birtahdate" value="{{Request::old('user_birtahdate')}}">
				<span class="error_message">{{ $errors->first('user_birtahdate')}} </span>
			  </div>
			</div>
 
			  	
			 

			<div class="control-group">
			  <label class="control-label" for="typeahead">Working Area<span style="color:red;">*</span> </label>
			  <div class="controls">
				<input type="text" class="span6 typeahead" name="user_posting" id="car_metro" data-provide="typeahead" data-items="4"   value="{{Request::old('user_posting')}}"> 
				<div id="areatatus" class="list_suggation" style="width:48.7%;overflow: hidden;"></div>
				<span class="error_message">{{ $errors->first('user_posting')}} </span>
			  </div>
			</div>

			 <div class="control-group">
			 	<label class="control-label" for="typeahead">Select Gender<span style="color:red;">*</span> </label>
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
<script>
        function showdv(obj,id1,id2) {
            txt=obj.options[obj.selectedIndex].text;
            document.getElementById("codFiscaleField").style.display='none';
             
            if (txt.match(id1)) {
                document.getElementById("codFiscaleField2").style.display='block';
                document.getElementById("codFiscaleFieldXxx").value=txt
            }
             
            if (txt.match(id2)) {
            	document.getElementById("codFiscaleField2").style.display='block';
                document.getElementById("codFiscaleField").style.display='block';
                document.getElementById("codFiscaleFieldXxx").value=txt
            }
        }


        function identity_check(){ 
			var identity = $('#identity').val();
			var identity = $.trim(identity);
			$.ajax({
				type: 'get',
				data: 'identity='+identity,
				url: '<?php echo url('check_identity'); ?>',
				success: function(responseText){  
					if(responseText==1){  //already exist
						//alert("This Email Id Already Exist");
						$("#exist").val("1"); //already exist
						$("#identity").css('box-shadow', '2px 0px 0px 0px red'); 
						$('#identity_error_msg').html("Identity Number Already Exist.");	
						$("#identity").focus();
						return false;				   
					}else if(responseText==0){
					    $("#exist").val("0");
						$("#identity").css('border', '');
						$('#identity_error_msg').html("");	
					}
				}		
			});	
		}

		function user_nid_check(){  
			var opts = $('#opts').val();
			var user_nid = $('#user_nid').val();
			var user_nid = $.trim(user_nid);
			var opts = $.trim(opts);
			$.ajax({
				type: 'get', 
				data: 'user_nid='+user_nid+'&opts='+opts,
				url: '<?php echo url('check_user_nid'); ?>',
				success: function(responseText){  
					if(responseText==1){  //already exist
						//alert("This Email Id Already Exist");
						$("#exist").val("1"); //already exist
						$("#user_nid").css('box-shadow', '2px 0px 0px 0px red'); 
						$('#user_nid_error_msg').html("NID Number Already Exist.");	
						$("#user_nid").focus();
						return false;				   
					}else if(responseText==0){
					    $("#exist").val("0");
						$("#user_nid").css('border', '');
						$('#user_nid_error_msg').html("");	
					}
				}		
			});	
		}

		function user_email_check(){  
			var opts = $('#opts').val();
			var user_email = $('#user_email').val();
			var user_email = $.trim(user_email);
			var opts = $.trim(opts);
			$.ajax({
				type: 'get', 
				data: 'user_email='+user_email+'&opts='+opts,
				url: '<?php echo url('check_user_email'); ?>',
				success: function(responseText){  
					if(responseText==1){  //already exist
						//alert("This Email Id Already Exist");
						$("#exist").val("1"); //already exist
						$("#user_email").css('box-shadow', '2px 0px 0px 0px red'); 
						$('#user_email_error_msg').html("Email Already Exist.");	
						$("#user_email").focus();
						return false;				   
					}else if(responseText==0){
					    $("#exist").val("0");
						$("#user_email").css('border', '');
						$('#user_email_error_msg').html("");	
					}
				}		
			});	
		}

		function user_number_check(){  
			var opts = $('#opts').val();
			var user_number = $('#user_number').val();
			var user_number = $.trim(user_number);
			var opts = $.trim(opts);
			$.ajax({
				type: 'get', 
				data: 'user_number='+user_number+'&opts='+opts,
				url: '<?php echo url('check_user_number'); ?>',
				success: function(responseText){  
					if(responseText==1){  //already exist
						//alert("This Email Id Already Exist");
						$("#exist").val("1"); //already exist
						$("#user_number").css('box-shadow', '2px 0px 0px 0px red'); 
						$('#user_number_error_msg').html("Number Already Exist.");	
						$("#user_number").focus();
						return false;				   
					}else if(responseText==0){
					    $("#exist").val("0");
						$("#user_number").css('border', '');
						$('#user_number_error_msg').html("");	
					}
				}		
			});	
		}


		 








</script>
@endsection 