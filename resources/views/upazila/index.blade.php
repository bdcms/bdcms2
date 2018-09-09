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
	<li><a href="#">Dashboard</a></li>
	<li style="float: right;">
		
		<button class="btn btn-primary" type="button" data-toggle="collapse" pull="right" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
		  Search Case
		</button>
		
	</li>
</ul>
<div class="collapse upazila_car_search" id="collapseExample">
  <div class="well">
     <form class="navbar-form navbar-left" role="search" action="{{url('/upazila_car_search')}}" method="post">
     	{{csrf_field()}}
        <div class="form-group">
          <input type="number" class="form-control" placeholder="Insert Case Number" name="case_number">
        </div>
        <button type="submit" class="btn btn-default"><span><i class="glyphicons-icon zoom_out"></i></span></button>
      </form>
  </div>
</div>
 
			
<div class="row-fluid">
	
	<div class="span3 statbox purple" onTablet="span6" onDesktop="span3">
		<div class="boxchart">5,6,7,2,0,4,2,4,8,2,3,3,2</div>
		<div class="number">854<i class="icon-arrow-up"></i></div>
		<div class="title">visits</div>
		<div class="footer">
			<a href="#"> read full report</a>
		</div>	
	</div>
	<div class="span3 statbox green" onTablet="span6" onDesktop="span3">
		<div class="boxchart">1,2,6,4,0,8,2,4,5,3,1,7,5</div>
		<div class="number">123<i class="icon-arrow-up"></i></div>
		<div class="title">sales</div>
		<div class="footer">
			<a href="#"> read full report</a>
		</div>
	</div>
	<div class="span3 statbox blue noMargin" onTablet="span6" onDesktop="span3">
		<div class="boxchart">5,6,7,2,0,-4,-2,4,8,2,3,3,2</div>
		<div class="number">982<i class="icon-arrow-up"></i></div>
		<div class="title">orders</div>
		<div class="footer">
			<a href="#"> read full report</a>
		</div>
	</div>
	<div class="span3 statbox yellow" onTablet="span6" onDesktop="span3">
		<div class="boxchart">7,2,2,2,1,-4,-2,4,8,,0,3,3,5</div>
		<div class="number">678<i class="icon-arrow-down"></i></div>
		<div class="title">visits</div>
		<div class="footer">
			<a href="#"> read full report</a>
		</div>
	</div>	
	
</div>
 
@endsection