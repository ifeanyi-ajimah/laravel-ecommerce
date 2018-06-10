@extends('admin/layout.admin')
@section('content')

<br>
    <h3>Admin - categories </h3>
<br><br>
    <div class="navbar">
    	<a class="navbar-brand" href="#"> Categories =></a>
    	<ul class="nav navbar-nav">
    		@if(!empty($categories))
    		@forelse($categories as $category)
    		<li>
    			<a href="{{route('category.show', $category->id)}}"> {{$category-> name}}</a><!-- Always remember to pass parameter like $cat_id, because the controller accepts a parameter -->

    		</li><br>
    		@empty

    		<li > No data </li>
    	@endforelse
    	@endif
    	</ul>
<br>
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Create Category</button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add category</h4>
      </div>
      <div class="modal-body">
        <p>kindly enter credentials here.</p>


        <form action="{{route('category.store')}}" method="post" enctype="multipart/form-data">
                             {{csrf_field()}}

  <div class="form-group">
    <label for="name"> Name</label>
    <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Enter Category Name">
    <small id="emailHelp" class="form-text text-muted">Name of category.</small>
  </div>
  

  <button  type="submit"class="btn btn-primary">Create Category</button>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
    </div>

    @if(!empty($products))
    <section>
        <table class="table table-condensed">
    <thead>
      <tr>
        <th>Product Number</th>
        <th>Product</th>
      </tr>
    </thead>
    <tbody>
        @forelse($products as $product)
      <tr>
        <td>{{$product->id}}</td>
        <td>{{$product->name}}</td>
      </tr>
      @empty
        <tr>
        <td>no data</td>
        <td>no data</td>
      </tr>

      @endforelse
    </tbody>
  </table>

    </section>
    @endif



@endsection
