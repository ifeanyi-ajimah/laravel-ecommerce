@extends('layout.main')
@section('content')


<div class="row">
	<div class="col-md-6 col-md-offset-3 ">
							<h3 style="text:center;">Shipping Info</h3>
				
			<form action="{{route('address.store')}}" method="post" enctype="multipart/form-data">
			  {{csrf_field()}}

			  <div class="form-group">
			    <label for="addressline"> Address Line</label>
			    <input type="text" class="form-control" id="addressline" name="addressline" required aria-describedby="emailHelp" placeholder="Enter Address">
			    <small id="emailHelp" class="form-text text-muted">Address.</small>
			  </div>
			  <div class="form-group">
			    <label for="city"> City</label>
			    <input type="text" class="form-control" id="city" name="city" required aria-describedby="emailHelp" placeholder="Enter City">
			    <small id="emailHelp" class="form-text text-muted">City.</small>
			  </div>
			  <div class="form-group">
			    <label for="state"> State</label>
			    <input type="text" class="form-control" id="state" name="state" required aria-describedby="emailHelp" placeholder="Enter State">
			    <small id="emailHelp" class="form-text text-muted">State.</small>
			  </div>
			  <div class="form-group">
			    <label for="zip"> Zip</label>
			    <input type="text" class="form-control" id="zip" name="zip" required aria-describedby="emailHelp" placeholder="Enter Zip">
			    <small id="emailHelp" class="form-text text-muted">Zip.</small>
			  </div>
			  <div class="form-group">
			    <label for="country"> Country</label>
			    <input type="text" class="form-control" id="country" name="country" required aria-describedby="emailHelp" placeholder="Enter Country">
			    <small id="emailHelp" class="form-text text-muted">Country</small>
			  </div>
			  <div class="form-group">
			    <label for="phone"> Phone</label>
			    <input type="text" class="form-control" id="phone" name="phone" required aria-describedby="emailHelp" placeholder="Enter Phone Number">
			    <small id="emailHelp" class="form-text text-muted">Phone.</small>
			  </div>
			  
			  
			   <button type="submit" class="btn btn-primary">Proceed To CheckOut</button>

			   <br><br>
			</form>




	</div>
</div>

@endsection