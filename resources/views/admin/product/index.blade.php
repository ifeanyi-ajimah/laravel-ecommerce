@extends('../admin/layout.admin')
@section('content')
<h3> HERE ARE THE ADDED PRODUCTS. </h3>

	

<table class="table table-stripped">
	<thead>
		<tr>
        <th>Product Name</th>
        <th>Product Price</th>
        <th>Product description</th>
        <th>Category</th>
        <th>Action</th>
      </tr>
	</thead>
	
	<tbody>
		@forelse($products as $product)
		<tr>
			<td>{{$product->name}}</td>
			<td>${{$product->price}}</td>
			<td>{{$product->description}}</td>
			<td>{{count($product->category)?$product->category->name: "N/A"}}</td>
		
			
			<td> <form action="{{route('product.destroy',$product->id)}}" method="POST" style="display:inline">  <input type="hidden" name="_method" value="DELETE">
    <input type="hidden" name="_token" value="{{ csrf_token() }}"><button type="submit" class="btn btn-sm btn-danger"> Delete</button> </form>

	</td>

		</tr>
@empty
	<h3> No product inputed yet.</h3>
	@endforelse

	</tbody>

</table>	
	




@endsection