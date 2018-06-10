
@extends('../admin/layout.admin')
@section('content')
<div class="row">
  <div class="col-md-6 col-md-offset-3">

    <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
  {{csrf_field()}}

  <div class="form-group">
    <label for="name"> Name</label>
    <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Enter Product Name">
    <small id="emailHelp" class="form-text text-muted">Name of products.</small>
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <textarea class="form-control" id="description"name="description" rows="3" placeholder="Enter Product description"></textarea>
  </div>
  <div class="form-group">
    <label for="size">Size</label>
    <select class="form-control" id="size" name="size">
      <option>small</option>
      <option>medium</option>
      <option>large</option>
    </select>
  </div>
  <div class="form-group">
    <label for="name"> Price</label>
    <input type="text" class="form-control" id="price" name="price" aria-describedby="emailHelp" placeholder="Enter Product price">
    <small id="price" class="form-text text-muted">Price of product</small>
  </div>
  <div class="form-group" >
    <label for="category_id" placeholder="Select Category">Categories</label>
    <select class="form-control" id="category_id" name="category_id" >
              
              @if(!empty($categories))
              @forelse($categories as $category)
              <option >{{$category }}</option>
              @empty
              <option >0</option>
              @endforelse
              @endif
    </select>
  </div>
  
  <div class="form-group">
    <label for="image">File input</label>
    <input type="file" class="form-control-file" id="image" name="image" aria-describedby="fileHelp">
    <small id="fileHelp" class="form-text text-muted">This is going to be our product image.</small>
  </div>
    <button type="submit" class="btn btn-primary">Create</button>
</form>


  </div>

</div>

@endsection