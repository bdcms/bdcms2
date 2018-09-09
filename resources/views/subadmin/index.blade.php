@extends('master.admin_layout')
@section('content')

 

@if (session('msg'))
    <div class="alert success_alrt_msg">
        {{ session('msg') }}
        <button type="button" class="close" data-dismiss="alert">×</button>
    </div>
@endif

@if(Session::get('role_id')==4)
<ul class="breadcrumb">
	<li>
		<i class="icon-home"></i>
		<a href="index.html">Home</a> 
		<i class="icon-angle-right"></i>
	</li>
	<li><a href="#">Dashboard</a></li>
</ul>

 
			
<div class="row-fluid">	

 
	<div class="clearfix"></div>
					
</div><!--/row-->
@endif
@endsection