@extends('master.front_user_layout')
@section('content')

 

@if (session('msg'))
    <div class="alert success_alrt_msg">
        {{ session('msg') }}
        <button type="button" class="close" data-dismiss="alert">×</button>
    </div>
@endif

 
 

 
			
<div class="row">	

 	<div class="col-lg-3 col-md-3 col-sm-6">
 		<div class=" statbox green" ontablet="span6" ondesktop="">
			<div class="boxchart"><canvas width="64" height="60" style="display: inline-block; width: 64px; height: 60px; vertical-align: top;"></canvas></div>
			<div class="number">01<i class="icon-arrow-up"></i></div>
			<div class="title">Cars</div>
			<div class="footer">
				<a href="#"> read full report</a>
			</div>
		</div>
 	</div>
 	<div class="col-lg-3 col-md-3 col-sm-6">
 		<div class=" statbox yellow" ontablet="span6" ondesktop="">
			<div class="boxchart"><canvas width="64" height="60" style="display: inline-block; width: 64px; height: 60px; vertical-align: top;"></canvas></div>
			<div class="number">01<i class="icon-arrow-up"></i></div>
			<div class="title">Cases</div>
			<div class="footer">
				<a href="#"> All Cases </a>
			</div>
		</div>
 	</div>
 	<div class="col-lg-3 col-md-3 col-sm-6">
 		<div class=" statbox pink" ontablet="span6" ondesktop="">
			<div class="boxchart"><canvas width="64" height="60" style="display: inline-block; width: 64px; height: 60px; vertical-align: top;"></canvas></div>
			<div class="number">01-Sep-18<i class="icon-arrow-up"></i></div>
			<div class="title">Date</div>
			<div class="footer">
				<a href="#"> Service Start Date</a>
			</div>
		</div>
 	</div>
	<div class="clearfix"></div>
					
</div><!--/row-->
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12">
		<div class="frontend_datatable">
			<div class="table_heading">
				<p>Owner all of car's list</p>
			</div>
			<table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th><span>#</span></th>
                        <th><span>Car Type</span></th>
                        <th><span>Car Number</span></th>
                        <th><span>Metro</span></th>
                        <th><span>Driver</span></th>
                        <th><span>status</span></th>
                        <th><span>Action</span></th>
                    </tr>
                </thead>
                <tbody> 
                     <tr>
                        <td><span>1</span></td>
                        <td><span>District</span></td>
                        <td><span>Bus</span></td>
                        <td><span>Track</span></td>
                        <td><span>Mortor Cycle</span></td>
                        <td>
                            <span class="label label-success">approved</span>
                        	
                        </td>
                        <td class="action_btn">
                            <form action="" method="post">
                                {{csrf_field()}}
                                <input type="hidden" name="">
                                <button type="button" class="btn btn-success">publish</button>
                            </form>
                        	<a href="#"><i class="fa fa-edit"></i></a>
                        	<a href="#"> <i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th><span>#</span></th>
                        <th><span>Car Type</span></th>
                        <th><span>Car Number</span></th>
                        <th><span>Metro</span></th>
                        <th><span>Driver</span></th>
                        <th><span>status</span></th>
                        <th><span>Action</span></th>
                    </tr>
                </tfoot>
            </table>
        </div> 
	</div>
</div>
 
@endsection