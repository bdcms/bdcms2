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
				<li><a href="#">Tables</a></li>
			</ul>
			
			<div class="row-fluid sortable">		
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
						<div class="filter_table"> 
		                	<form action="" method="Post">
		                   		<div class="control-group">
									<label class="control-label" for="selectError3">Car Name</label>
									<div class="controls">
									  <select id="selectError3">
										<option value="1">All Car Type</option>
				                        <option value="2">Bus</option>
				                        <option value="3">Big Track</option>
				                        <option value="4">Large Vehicle</option>
				                        <option value="5">Motorbike</option>
				                        <option value="6">Minicar</option>
									  </select>
									</div>
								  </div>

								  <div class="control-group">
									<label class="control-label" for="selectError3">Police Station</label>
									<div class="controls">
									  <select id="selectError3">
										<option value="1">All Police Station</option>
				                        <option value="2">Terokhada</option>
				                        <option value="3">Rupsha</option>
				                        <option value="4">sonadanga</option>
				                        <option value="5">Horintana</option>
				                        <option value="6">Khalishpur</option>
									  </select>
									</div>
								  </div> 
			                  		<div class="form-actions">
			                  			<label class="control-label" for="selectError3"></label>
										<button type="submit" class="btn btn-primary">Filter Data</button> 
									 </div> 
			                </form>  
			              </div>
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Name</th>
								  <th>Car Number</th>
								  <th>Date</th>
								  <th>Car type</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
						  	@if(count($allinfo)>0)
							  	@foreach($allinfo as $value)   
								<tr>
									<td>{{$value->won_name}}</td>
									<td class="center">{{$value->car_reg_num}}</td>
									<td class="center">{{$value->car_reg_date}}</td>
									<td class="center">{{$value->car_name}}</td>
									<td class="center">
										<a class="btn btn-success" href="{{URL::to("/zillaApp/$value->id")}}">
											<i class="halflings-icon white zoom-in"></i>  
										</a>
										<a class="btn btn-info" href="#">
											<i class="halflings-icon white edit"></i>  
										</a>
										<a class="btn btn-danger" id="Delete" href="{{URL::to("/Application_Delete/$value->id")}}">
											<i class="halflings-icon white trash"></i> 
										</a>
									</td>
								</tr> 
								@endforeach
							@else
								<tr>No Data Found</tr>
							@endif

						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
@endsection