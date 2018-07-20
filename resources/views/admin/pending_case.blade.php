@extends('master.admin_layout')
@section('content')
<?php if($msg = Session::get('message')): $class = Session::get('class'); if($class=='alert alert-success'){$snap='Well done! ';}else{$snap='Oh snap! ';}?> 
 	<div class="{{$class}} success_alrt_msg">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>{{$snap}}</strong> {{$msg}}
	</div> 
<?php Session::put('message',null); endif; ?>
<ul class="breadcrumb">
	<li>
		<i class="icon-home"></i>
		<a href="index.html">Home</a> 
		<i class="icon-angle-right"></i>
	</li>
	<li><a href="#">Tables</a></li>
	</ul>

	<div class="row-fluid sortable">		
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>
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
					  <th>Owner</th>
					  <th>Car Number</th>
					  <th>Case</th>
					  <th>Driver</th>
					  <th>Complainant</th>
					  <th>Date</th>
					  <th>Blacklist</th> 
					  <th>Action</th> 
				  </tr>
			  </thead>   
			  <tbody>
 
				<tr> 
					<td class="center"></td>
					<td class="center"></td>
					<td class="center"></td> 
					<td class="center"></td> 
					<td class="center"></td> 
					<td class="center"></td> 
					<td class="center"></td> 
					<td class="center"></td> 
				</tr> 
			 

				 

				 
			  </tbody>
		  </table>            
		</div>
	</div><!--/span-->

	</div><!--/row-->
@endsection