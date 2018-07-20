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
		          <td>{{$value->user_name}}</td> 
		          <td>{{$value->user_fname}}</td> 
		          <td>{{$value->user_mobile}}</td> 
		          <td>{{$value->user_email}}</td> 
		          <td>{{$value->user_address}}</td> 
		          <td>{{$value->user_birthday}}</td> 
		          <td>{{$value->user_nid}}</td> 
		          <td>{{$value->user_lisence}}</td>   
		          <td>{{$car_info->car_reg_num}}</td>    
		          <td>{{$car_info->user_name}}</td>    
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
					@foreach($driver as $value)
					<?php   
				        $car_info = DB::table('cars')
				        			->join('users','cars.driver_id','=','users.id')
				                    ->where('cars.id',$value->car_id)
				                    ->first();
				    ?>
			        <tr> 
			          <td>{{$value->user_name}}</td> 
			          <td>{{$value->user_fname}}</td> 
			          <td>{{$value->user_mobile}}</td> 
			          <td>{{$value->user_email}}</td> 
			          <td>{{$value->user_address}}</td> 
			          <td>{{$value->user_birthday}}</td> 
			          <td>{{$value->user_nid}}</td> 
			          <td>{{$value->user_lisence}}</td>   
			          <td>{{$car_info->car_reg_num}}</td>    
			        </tr> 

					@endforeach
			      </tbody>
			    </table>
		    @endif

	 
</body>
</html>