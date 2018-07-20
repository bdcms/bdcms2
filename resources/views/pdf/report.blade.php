<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	  
	<style>
		.page-break {
		    page-break-after: always;
		}
		.table{float: left;width: 100%;}
		.table-bordered{border:1px solid #777;}
		.table-bordered tr td{border: 1px solid #ddd;}
		.table-bordered tr th{border: 1px solid #ddd;}

	</style>

</head>
<body> 

		<div class="heading">
			<img style="height: 50px;width: 80px;float: left;" src="{{URL::to('public/Frontend/images/logo.jpg')}}">
			<h1 style="text-align: center;margin: 0px;padding: 0px;color: #2D89EF;">Bangladesh Car Management System</h1><br>
			<p style="text-align: center;margin: 0px;padding: 0px;margin-top: -15px;margin-bottom: 10px;">Sonadanga R/A,9002,Khulna 

				<span style="float: right;font-size: 12px;margin-top: 0px; position: absolute;color: #2D89EF;"><strong>print time: </strong> 
				<?php 
					echo date('m/d/Y h:i:s a', time());
				?>
			</span></p>
			
		</div>
		<table class="table table-bordered" style="font-size: 12px;">
		      <thead>
		        <tr>
		          <th>Name</th>
		          <th>Contact</th>
		          <th>Car Name</th>
		          <th>Car Number</th>
		          <th>Chasis No</th>
		          <th>Enginee No</th>
		          <th>Insurence No</th>
		          <th>Wheel No</th>
		          <th>Driver Name</th>
		        </tr>
		      </thead>
		      <tbody>
				@foreach($data as $value)
				<?php 
			        $driver = $value->driver_id;  
			        $driver_info = DB::table('users')
			                    ->where('id',$driver)
			                    ->first();
			    ?>
		        <tr> 
		          <td>{{$value->user_name}}</td> 
		          <td>{{$value->user_mobile}}</td> 
		          <td>{{$value->car_name}}</td> 
		          <td>{{$value->car_reg_num}}</td> 
		          <td>{{$value->car_chasis}}</td> 
		          <td>{{$value->car_engine_num}}</td> 
		          <td>{{$value->car_insurence}}</td> 
		          <td>{{$value->car_wheel}}</td>  
		          <td>{{$driver_info->user_name}}</td>  
		        </tr> 

				@endforeach
		      </tbody>
		    </table>

	 
</body>
</html>