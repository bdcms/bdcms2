@extends('master.admin_layout')
@section('content') 

<?php if($msg = Session::get('message')): $class = Session::get('class'); if($class=='alert alert-success'){$snap='Well done! ';}else{$snap='Oh snap! ';}?> 
 	<div class="{{$class}} success_alrt_msg">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>{{$snap}}</strong> {{$msg}}
	</div> 
<?php Session::put('message',null); endif; ?>

@if (session('status'))
    <div class="alert success_alrt_msg">
        {{ session('status') }}
        <button type="button" class="close" data-dismiss="alert">×</button>
    </div>
@endif
@if(Session::get('role_id')==1)
<ul class="breadcrumb">
	<li>
		<i class="icon-home"></i>
		<a href="index.html">Home</a> 
		<i class="icon-angle-right"></i>
	</li>
	<li><a href="#">Dashboard</a></li>
</ul>

 
			
<div class="row-fluid">	

	 dvsdfsdf
	
	<div class="clearfix"></div>
					
</div><!--/row-->
@endif
@endsection