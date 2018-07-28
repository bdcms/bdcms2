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

		
		@if(isset($data))
		<div class="heading">
			<img style="height: 50px;width: 80px;float: left;" src="{{URL::to('public/Frontend/images/logo.jpg')}}">
			<h1 style="text-align: center;margin: 0px;padding: 0px;color: #2D89EF;">Bangladesh Car Management System</h1><br>
			<p style="text-align: center;margin: 0px;padding: 0px;margin-top: -15px;margin-bottom: 10px;">Sonadanga R/A,9002,Khulna 

				</p>
				<span style="float: right;font-size: 12px;margin-top: 0px; position: absolute;color: #2D89EF;"><strong>print time: </strong> 
				<?php 
					echo date('m/d/Y h:i:s a', time());
				?>
			</span>
			<p style="text-align: center;margin: 0px;padding: 0px;margin-top: -5px;margin-bottom: 10px;color: #2D89EF;">Khulna Zilla Car Owner Report</p>
			
		</div>
		<table class="table table-bordered" style="font-size: 12px;">
		      <thead>
		        <tr>
		          <th>Name</th>
		          <th>F-Name</th>
		          <th>Contact</th>
		          <th>Email</th>
		          <th>Address</th>
		          <th>Birth</th>
		          <th>NID</th> 
		          <th>Lisence</th> 
		          <th>Car No</th> 
		          <th>Driver</th> 
		        </tr>
		      </thead>
		      <tbody>
				@foreach($data as $value)
				<?php   
			        $car_info = DB::table('cars')
			        			->join('users','cars.driver_id','=','users.id')
			                    ->where('cars.id',$value->car_id)
			                    ->first();
			    ?>
		        <tr> 
		          <td>@if(isset($value->user_name)){{$value->user_name}}@endif</td> 
		          <td>@if(isset($value->user_fname)){{$value->user_fname}}@endif</td> 
		          <td>@if(isset($value->user_mobile)){{$value->user_mobile}}@endif</td> 
		          <td>@if(isset($value->user_email)){{$value->user_email}}@endif</td> 
		          <td>@if(isset($value->user_address)){{$value->user_address}}@endif</td> 
		          <td>@if(isset($value->user_birthday)){{$value->user_birthday}}@endif</td> 
		          <td>@if(isset($value->user_nid)){{$value->user_nid}}@endif</td> 
		          <td>@if(isset($value->user_lisence)){{$value->user_lisence}}@endif</td>   
		          <td>@if(isset($car_info->user_name)){{$car_info->car_reg_num}}@endif</td>    
		          <td>@if(isset($car_info->user_name)){{$car_info->user_name}}@endif</td>    
		        </tr> 

				@endforeach
		      </tbody>
		    </table>
		    @elseif(isset($driver))
		    <div class="heading">
			<img style="height: 50px;width: 80px;float: left;" src="{{URL::to('public/Frontend/images/logo.jpg')}}">
			<h1 style="text-align: center;margin: 0px;padding: 0px;color: #2D89EF;">Bangladesh Car Management System</h1><br>
			<p style="text-align: center;margin: 0px;padding: 0px;margin-top: -15px;margin-bottom: 10px;">Sonadanga R/A,9002,Khulna 

				</p>
				<span style="float: right;font-size: 12px;margin-top: 0px; position: absolute;color: #2D89EF;"><strong>print time: </strong> 
				<?php 
					echo date('m/d/Y h:i:s a', time());
				?>
			</span>
			<p style="text-align: center;margin: 0px;padding: 0px;margin-top: -5px;margin-bottom: 10px;color: #2D89EF;">Khulna Zilla Car Driver Report</p>
			
		</div>
		    	<table class="table table-bordered" style="font-size: 12px;">
			      <thead>
			        <tr>
			          <th>Name</th>
			          <th>F-Name</th>
			          <th>Contact</th>
			          <th>Email</th>
			          <th>Address</th>
			          <th>Birth</th>
			          <th>NID</th> 
			          <th>Lisence</th> 
			          <th>Car No</th>  
			        </tr>
			      </thead>
			      <tbody>
					@foreach($driver as $drivers)
					<?php   
				        $car_info = DB::table('cars')
				        			->join('users','cars.driver_id','=','users.id')
				                    ->where('cars.id',$drivers->car_id)
				                    ->first();
				    ?>
			        <tr> 
			          <td>@if(isset($drivers->user_name)){{$drivers->user_name}}@endif</td> 
			          <td>@if(isset($drivers->user_fname)){{$drivers->user_fname}}@endif</td> 
			          <td>@if(isset($drivers->user_mobile)){{$drivers->user_mobile}}@endif</td> 
			          <td>@if(isset($drivers->user_email)){{$drivers->user_email}}@endif</td> 
			          <td>@if(isset($drivers->user_address)){{$drivers->user_address}}@endif</td> 
			          <td>@if(isset($drivers->user_birthday)){{$drivers->user_birthday}}@endif</td> 
			          <td>@if(isset($drivers->user_nid)){{$drivers->user_nid}}@endif</td> 
			          <td>@if(isset($drivers->user_lisence)){{$drivers->user_lisence}}@endif</td>   
			          <td>@if(isset($car_info->car_reg_num)){{$car_info->car_reg_num}}@endif</td>    
			        </tr> 

					@endforeach
			      </tbody>
			    </table>
		    @endif

	 
</body>
</html>