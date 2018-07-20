@extends('master.admin_layout')
@section('content')
<ul class="breadcrumb">
  <li>
    <i class="icon-home"></i>
    <a href="index.html">Home</a> 
    <i class="icon-angle-right"></i>
  </li>
  <li>  
    <a href="index.html">Application</a> 
    <i class="icon-angle-right"></i>
  </li> 
  <li><a href="#">single application</a></li>
</ul>

<div class="row-fluid sortable">    
  <div class="box span12">
    <div class="box-header" data-original-title> 

      <h2><i class="halflings-icon user"></i><span class="break"></span>Application single Information</h2>
      <div class="box-icon">
        <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
        <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
        <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
      </div>
    </div>
    <div class="box-content">
       
      <div class="body_wrap">
  <h2>Application</h2> 
  <p>The use of these trademarks does not indicate endorsement of the trademark holder by Font Awesome, nor vice versa.</p>


  



  <div class="body_content section_heading_custom">  
    <div class="cus_col_lg_7">
         <h6>Woner Information</h6>
         
        <table class="table table-striped"> 
          <tbody>
            <tr>
              <td>Name of woner:</td>
              <td>{{$carinfo->user_name}}</td> 
            </tr>
            <tr>
              <td>Father Name:</td>
              <td>{{$carinfo->user_fname}}</td> 
            </tr> 
            <tr>
              <td>Address:</td>
              <td>{{$carinfo->user_address}}</td> 
            </tr>
            <tr>
              <td>National ID Number:</td>
              <td>{{$carinfo->user_nid}}</td> 
            </tr>
            <tr>
              <td>Date of Birth:</td>
              <td>{{$carinfo->user_birthday}}</td> 
            </tr>
            <tr>
              <td>Contact Number:</td>
              <td>{{$carinfo->user_mobile}}</td> 
            </tr>
            <tr>
              <td>Email:</td>
              <td>{{$carinfo->user_email}}</td> 
            </tr>
            <tr>
              <td>Passport Number:</td>
              <td>{{$carinfo->user_passport}}</td> 
            </tr>
            <tr>
              <td>Driving Lisence:</td>
              <td>{{$carinfo->user_lisence}}</td> 
            </tr>
             
          </tbody>
        </table>
      

        <h6>Car Information</h6>
        <table class="table table-striped"> 
          <tbody>
            <tr>
              <td>Car Number:</td>
              <td>{{$carinfo->car_reg_num}}</td> 
            </tr>
            <tr>
              <td>Wheel No:</td>
              <td>{{$carinfo->car_wheel}}</td> 
            </tr>
            <tr>
              <td>Car Type:</td>
              <td>{{$carinfo->car_name}}</td> 
            </tr>
            <tr>
              <td>Insurence Number:</td>
              <td>{{$carinfo->car_insurence}}</td> 
            </tr>
            <tr>
              <td>Road Permit:</td>
              <td>{{$carinfo->car_road_permit_no}}</td> 
            </tr>
            <tr>
              <td>Fitness Car:</td>
              <td>{{$carinfo->user_lisence}}</td> 
            </tr>
            <tr>
              <td>Sasis Number:</td>
              <td>{{$carinfo->car_chasis}}</td> 
            </tr>
            <tr>
              <td>Enginee Number:</td>
              <td>{{$carinfo->car_engine_num}}</td> 
            </tr>  
          </tbody>
        </table>
        <?php 
          $driver = $carinfo->driver_id;  
           
          $driver_info = DB::table('users')
                    ->where('id',$driver)
                    ->first();
        ?>
        <h6>Driver Information</h6>
         <table class="table table-striped"> 
          <tbody>
            @if($driver_info->pub_status==1)
            <tr>
              <h6>Profile Already Verified.</h6>
            </tr>
            @endif
            <tr>
              <td>Name:</td>
              <td>{{$driver_info->user_name}}</td> 
            </tr>
            
            <tr>
              <td>Father Name:</td>
              <td>{{$driver_info->user_fname}}</td> 
            </tr> 
            <tr>
              <td>Address:</td>
              <td>{{$driver_info->user_address}}</td> 
            </tr>
            <tr>
              <td>Date of Birth:</td>
              <td>{{$driver_info->user_birthday}}</td> 
            </tr>
             <tr>
              <td>Gender:</td>
              <td>{{$driver_info->user_gender}}</td> 
            </tr>
            <tr>
              <td>Driving Lisence No:</td>
              <td>{{$driver_info->user_lisence}}</td> 
            </tr>
            <tr>
              <td>National ID Number:</td>
              <td>{{$driver_info->user_nid}}</td> 
            </tr>
            <tr>
              <td>Contact Number:</td>
              <td>{{$driver_info->user_mobile}}</td> 
            </tr>
            <tr>
              <td>Email:</td>
              <td>{{$driver_info->user_email}}</td> 
            </tr>
            <tr>
              <td>Passport Number:</td>
              <td>{{$driver_info->user_passport}}</td> 
            </tr>
              
             
          </tbody>
        </table>
          @if($carinfo->car_status==0)
          <div class="filter_table"> 
              <form style="float: left;" action="{{URL('/Application_Approved/'.$carinfo->id)}}" method="Post"> 
                {{csrf_field()}}

                <div class="form-actions"> 
                <button type="submit" class="btn btn-primary">Approve</button> 
                </div> 
              </form>  
              <form style="float: left;" action="{{URL('/Application_Reject/'.$carinfo->id)}}" method="Post"> 
                {{csrf_field()}}

                <div class="form-actions">  
                <button class="btn">Reject</button>
                </div> 
              </form>
          </div> 
          @endif      
         
      </div> 
      <div class="cus_col_lg_3">
        <h6>All of Documents</h6><table class="table table-striped"> 
           
          <tbody>
            <tr>
              <td>Woner Photo:</td>
              <td><a target="_blank" href="{{"$carinfo->user_profile_pic"}}"><img style="width: 200px;" src="{{"$carinfo->user_profile_pic"}}"></a></td> 
            </tr> 
            <tr>
              <td>Driver Photo:</td>
              <td><a target="_blank" href="{{"$carinfo->user_profile_pic"}}"><img style="width: 200px;" src="{{$driver_info->user_profile_pic}}"></a></td> 
            </tr>
            <tr>
              <td>Car Documents:</td>
              <td><a target="_blank" href="{{"$carinfo->car_document_pdf"}}">Documents</a></td> 
            </tr> 
             
          </tbody>
        </table>
      </div>
  </div> 
   
</div>            
    </div>
  </div><!--/span-->

</div><!--/row-->
@endsection