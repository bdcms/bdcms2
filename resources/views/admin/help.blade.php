@extends('master.master')
@section('content') 

<section class="section_class">
		<div class="col-lg-9 col-md-9 col-sm-6 col-xs-12">
			<h6>User Role</h6>
			<table class="table table-striped">
		      <thead>
		        <tr> 
		          <th>Role Name</th>
		          <th>Indicator</th>
		          <th>Description</th>
		        </tr>
		      </thead>
		      <tbody>
		        <tr> 
		          <td>Driver</td>
		          <td>3</td>
		          <td>@mdo</td>
		        </tr>
		        <tr> 
		          <td>Owner of Cars</td>
		          <td>2</td>
		          <td>@fat</td>
		        </tr>
		        <tr> 
		          <td>Police Surgent</td>
		          <td>5</td>
		          <td>@twitter</td>
		        </tr>
		        <tr> 
		          <td>Upazila Admin</td>
		          <td>4</td>
		          <td>@twitter</td>
		        </tr>
		      </tbody>
		    </table>

		    

		</div> <!-- Col-9 exit --> 
	</section>
@endsection
 