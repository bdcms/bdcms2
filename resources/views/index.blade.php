
@extends('master.master')
@section('content')

			@if (session('msg'))
	            <div class="alert alert-success">
	                {{ session('msg') }}
	            </div>
	        @endif
	<!-- --------------------------------Slider Section Start--------------------------------- -->
	 

	<!-- --------------------------------Slider Section Exit--------------------------------- -->
	<!-- --------------------------------Welcome Section Start--------------------------------- --> 
			 
	<section class="search_section">
		<div class="container">
		<div class="car_number_search">
								<div class="col-lg-12 col-md-12 col-sm-12"><h3>Searching car information..</h3></div>
								 
<form class="form-search" action="{{URL('/Search_Car')}}" method="POST">
	{{csrf_field()}}

	<div class="col-md-3 col-lg-3 col-sm-12 col-xsm-12"> 
		<label for="exampleInputEmail1"><span>Example:</span> Khulna</label>
		<div class="input_box_search">
  			<input type="text" name="district" class="input-medium " id="car_metro"  placeholder="District.." value="{{Request::old('district')}}" onchange="distirct_existing_check();">  
  			<div id="areatatus" class="list_suggation"></div>
        <div id="car_metro_error_msg"  style="color:#F00;font-weight:800;float: left; "> </div>
        </div>
        <span class="error_message">{{ $errors->first('district')}} </span>
	</div>

	<div class="col-md-3 col-lg-3 col-sm-12 col-xsm-12"> 
		<label for="exampleInputEmail1"><span> Example:</span> HA</label>
		<div class="input_box_search">
  			<input type="text" class="input-medium " id="keyword" name="digits" placeholder="Character.." value="{{Request::old('digits')}}" onchange="keyword_existing_check();">
  			<div id="keystatus"></div> 
            <div id="keyword_error_msg"  style="color:#F00;font-weight:800;float: left; "> </div>
  		</div>
  		<span class="error_message">{{ $errors->first('digits')}} </span>
	</div>

	<div class="col-md-6 col-lg-6 col-sm-12 col-xsm-12">  
  		<label for="exampleInputEmail1"><span>Example:</span> 123456</label>
  		<div class="input_box_search">
  			<input type="number" class="input-medium  search-query" name="number" id="car_number" placeholder="Car Number..." value="{{Request::old('number')}}" onchange="check_car_umber();">
  			<button type="submit" class="btn search_btn">Search</button>  
  		</div>
  		<span class="error_message">{{ $errors->first('number')}} </span>
	</div> 

</form> 
<div id="car_metro_error_msg"  style="color:#F00;font-weight:800;float: left;padding: 15px;"> </div>
							</div>
							</div>
	</section>


<section class="registrtion_sec section_class custom_row">
	<div class="container">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio ed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per.</p>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-lg-offset-4 col-md-offset-4 col-xs-12">
			<span>It's always be free</span>
			<a class="" href="{{URL::to('/ownerinfo')}}">Apply For Registration</a>
		</div>
	</div>
</section>

<section class="home_data_table section_class">
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="home_data_table_bg " style="margin-left: -15px !important;"> 
            <h4 id="tables-example">Data table heading</h4>
            <p>For basic styling—light padding and only horizontal dividers—add the base class  It may seem super redundant, but given the widespread use of tables for other plugins like calendars and date pickers, we've opted to isolate our custom table styles.</p> 
        </div>
		<div class="row">
			<div class="container">
                <div class="frontend_datatable">
    				<table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th><span>District</span></th>
                                <th><span>Bus</span></th>
                                <th><span>Track</span></th>
                                <th><span>Mortor Cycle</span></th>
                                <th><span>MiniBus</span></th>
                                <th><span>Total</span></th>
                            </tr>
                        </thead>
                        <tbody> 
                            <?php 
                                for ($i=0; $i < $counter; $i++) {  
                            ?>
                                <tr>
                                    <td>{{$cars_info[$i]["metro"]->metro_name}}</td>
                                    <td>{{$cars_info[$i]["bus"]}}</td>
                                    <td>{{$cars_info[$i]["track"]}}</td>
                                    <td>{{$cars_info[$i]["motorcycle"]}}</td>
                                    <td>{{$cars_info[$i]["minibus"]}}</td> 
                                    <td>{{$cars_info[$i]["total"]}}</td>
                                </tr>  
                            <?php } ?> 
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>District</th>
                                <th>Mororcycle</th>
                                <th>Bus</th>
                                <th>Track</th>
                                <th>MiniBus</th>
                                <th>Total</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>      
			</div>		
		</div>
	</div>




	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<div class="home_data_table_bg " style="margin-right: -15px !important;"> 
            <h4 id="tables-example">Data table heading</h4>
            <p>For basic styling—light padding and only horizontal dividers—add the base class  It may seem super redundant, but given the widespread use of tables for other plugins like calendars and date pickers, we've opted to isolate our custom table styles.</p> 
        </div>
        <div class="row">
            <div class="container">
                <div class="frontend_datatable">
                    <table id="example2" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th><span>District</span></th>
                                <th><span>Helmet Miss</span></th>
                                <th><span>Lisence Miss</span></th>
                                <th><span>Accident</span></th>
                                <th><span>Missing</span></th>
                                <th><span>Total</span></th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php 
                                for ($i=0; $i < $counter; $i++) {  
                            ?>
                                <tr>
                                    <td>{{$cases[$i]["metro"]->metro_name}}</td>
                                    <td>{{$cases[$i]["helmet"]}}</td>
                                    <td>{{$cases[$i]["licence"]}}</td>
                                    <td>{{$cases[$i]["accedent"]}}</td>
                                    <td>{{$cases[$i]["missing"]}}</td> 
                                    <td>{{$cases[$i]["total"]}}</td>
                                </tr>  
                            <?php } ?>
                             

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>District</th>
                                <th>Helmet Miss</th>
                                <th>Lisence Miss</th>
                                <th>Accident</th>
                                <th>Missing</th>
                                <th>Total</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>      
            </div>      
        </div>
	</div>
</section>

 

 
<section class="section_class custom_row" style="background-image: url({{URL::to('/public/Frontend/images/8.png')}});background-size: cover;background-attachment:fixed;">
    <div class="container"> 
        <div class="row custom_row"> 
                    <div class="col-xsm-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="resum-skill-view">   
                            <div id="features" class="section-our-capabilities l" > 
                                <div id="chart-show"> 
                                    <div class="col-xsm-12 col-sm-3 col-md-3 col-lg-3 skill-loder">
                                        <div class="our-capabilities">   
                                            <div class="one_third">  
                                                <div class="pie" data-percent="75" data-uk-scrollspy="{cls:'uk-animation-slide-top', delay:300, repeat: true}">
                                                    <span>75 </span> %<br />        
                                                </div>  
                                            </div>
                                            <p>Tax Paid</p>
                                        </div>  
                                    </div>

                                    <div class="col-xsm-12 col-sm-3 col-md-3 col-lg-3 skill-loder">
                                        <div class="our-capabilities">   
                                            <div class="one_third">  
                                                <div class="pie" data-percent="65" data-uk-scrollspy="{cls:'uk-animation-slide-top', delay:300, repeat: true}">
                                                    <span>65 </span> %<br />        
                                                </div> 
                                            </div> 
                                            <p>Insurence Upto date</p>
                                        </div>  
                                    </div>
                                    <div class="col-xsm-12 col-sm-3 col-md-3 col-lg-3 skill-loder">
                                        <div class="our-capabilities">   
                                             <div class="one_third"> 
                                                <div class="pie" data-percent="75" data-uk-scrollspy="{cls:'uk-animation-slide-top', delay:300, repeat: true}">
                                                    <span>75 </span> %<br />        
                                                </div>  
                                            </div>
                                            <p>Driving Lisence</p>
                                        </div>  
                                    </div>
                                    <div class="col-xsm-12 col-sm-3 col-md-3 col-lg-3 skill-loder">
                                        <div class="our-capabilities">   
                                             <div class="one_third">  
                                                <div class="pie" data-percent="90" data-uk-scrollspy="{cls:'uk-animation-slide-top', delay:300, repeat: true}">
                                                    <span>75 </span> %<br />        
                                                </div>  
                                            </div> 
                                            <p>Average Clear</p>
                                        </div>  
                                    </div>   
                                </div> 
                            </div>                  
                        </div> 
                    </div> 
                </div>
                </div>
</section>
<section class="section_class custom_row notice_section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="notice_wrap">
                    <div class="notice_heading">
                        <h6>BDCMS Nice Board</h6>
                    </div>
                    <div class="notice_body">
                        <ul>@foreach($nitices as $notice)
                            <li><i class="fa fa-check-circle"></i><a href="{{url("/notice-single/$notice->not_id")}}">{{$notice->not_name}} <span>{{$notice->not_date}}</span>  </a></li> 
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12"></div>
        </div>
    </div>
</section>
<section class="section_class custom_row key_person_section">  

    <div class="col-lg-3 col-md-3 col-sm-12">
        <div class="key_person_wrap thumbnail_pic" target="_blank" href="http://localhost/Academic/Profile">
            <div class="image">
                <img src="{{URL::to('/public/Frontend/images/team/1.png')}}" alt="image">
                <div class="imageoverlay">  
                    <a target="_blank" href="#">Md.Shariful Islam</a>  
                    <span>Chairmen of BDCMS</span>
                </div>
            </div>  
             
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-12">
        <div class="key_person_wrap thumbnail_pic" target="_blank" href="http://localhost/Academic/Profile">
            <div class="image">
                <img src="{{URL::to('/public/Frontend/images/team/2.png')}}" alt="image">
                <div class="imageoverlay">  
                    <a target="_blank" href="#">Md.Shariful Islam</a>  
                    <span>Senior Engineer of BDCMS</span>
                </div>
            </div>  
             
        </div>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-12">
        <div class="key_person_wrap thumbnail_pic" target="_blank" href="http://localhost/Academic/Profile">
            <div class="image">
                <img src="{{URL::to('/public/Frontend/images/team/3.png')}}" alt="image">
                <div class="imageoverlay">  
                    <a target="_blank" href="#">Fahriya Islam</a>  
                    <span>Director of BDCMS</span>
                </div>
            </div>  
             
        </div>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-12">
        <div class="key_person_wrap thumbnail_pic" target="_blank" href="http://localhost/Academic/Profile">
            <div class="image">
                <img src="{{URL::to('/public/Frontend/images/team/4.png')}}" alt="image">
                <div class="imageoverlay">  
                    <a target="_blank" href="#">S.M Rahman</a>  
                    <span>Reporter of BDCMS</span>
                </div>
            </div>  
             
        </div>
    </div>

</section>
<script>
function check_car_umber(){ 
    var car_metro   = $('#car_metro').val();
    var keyword     = $('#keyword').val();
    var car_number  = $('#car_number').val();
    var car_metro   = $.trim(car_metro);
    var keyword     = $.trim(keyword);
    var car_number  = $.trim(car_number); 
    var passnewpwd = 'car_metro='+car_metro+'&keyword='+keyword+'&car_number='+car_number;
    $.ajax({
        type: 'get',
        data: 'car_metro='+car_metro+'&keyword='+keyword+'&car_number='+car_number,
        url: '<?php echo url('check_car_umber'); ?>',
        success: function(responseText){  
            if(responseText==1){  //already exist
                //alert("This Email Id Already Exist");
                $("#exist").val("1"); //already exist  
                $("#car_number").focus();
                return false;                  
            }else if(responseText==0){
                $("#exist").val("0");
                $("#car_metro").css('border', '');
                $('#car_metro_error_msg').html("Car Number Not Found."); 
                $("#car_number").focus();
            }
        }       
    }); 
}

 function distirct_existing_check(){ 
    var car_metro = $('#car_metro').val();
    var car_metro = $.trim(car_metro);
    $.ajax({
        type: 'get',
        data: 'car_metro='+car_metro,
        url: '<?php echo url('check_car_metro_exists'); ?>',
        success: function(responseText){  
            if(responseText==1){  //already exist
                //alert("This Email Id Already Exist");
                $("#exist").val("1"); //already exist
                $("#car_metro").css('box-shadow', '2px 0px 0px 0px red'); 
                $('#car_metro_error_msg').html("");  
                $("#car_metro").focus();
                return false;                  
            }else if(responseText==0){
                $("#exist").val("0");
                $("#car_metro").css('border', '');
                $('#car_metro_error_msg').html("Car Metro Not Found.");   
            }
        }       
    }); 
}

 function keyword_existing_check(){ 
    var keyword = $('#keyword').val();
    var keyword = $.trim(keyword);
    $.ajax({
        type: 'get',
        data: 'keyword='+keyword,
        url: '<?php echo url('check_keyword_exists'); ?>',
        success: function(responseText){  
            if(responseText==1){  //already exist
                //alert("This Email Id Already Exist");
                $("#exist").val("1"); //already exist
                $("#keyword").css('box-shadow', '2px 0px 0px 0px red'); 
                $('#keyword_error_msg').html("");  
                $("#keyword").focus();
                return false;                  
            }else if(responseText==0){
                $("#exist").val("0");
                $("#keyword").css('border', '');
                $('#keyword_error_msg').html("Invalid Keyword.");   
            }
        }       
    }); 
}

</script>
	<!-- --------------------------------Welcome Section Exit--------------------------------- -->
@endsection