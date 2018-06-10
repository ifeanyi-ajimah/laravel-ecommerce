@extends('layout.main')
@section('content')


<div class="container">
  <h3>Cart Items</h3>
  <div>
  <div class="col-md-12 centered">
  <table class="table table-hover table-condensed">
      <thead>
        <tr>
          <th>Name</th>
          <th>Price($)</th>
          <th>Quantity</th>
          <th>Size</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
      	@foreach($cartItems as $cartItem)
        <tr>
          <td>{{$cartItem->name}}</td>
          <td>{{$cartItem->price}}</td>
          <td >
            <form method="POST" action="{{route('cart.update',$cartItem->rowId)}}" enctype="multipart/form-data" style="display:inline">
              {{method_field('PUT')}}
                {{csrf_field()}}
                <div class="form-group">
                  <input name="qty" type="text" value="{{$cartItem->qty}}" style="width:50px;">
                   {{--<button type="submit" class="btn btn-primary btn-xs" style="display:inline">Ok</button>--}}
                </div>
                
          
          </td>

          <td>
           
                <div class="form-group">
                  <select class="form-control" id="size" name="size" style="width:120px;">
                     <option>{{$cartItem->options->has('size')? $cartItem->options->size: ""}}</option>
                      <option>Small</option>
                      <option>Medium</option>
                      <option>Large</option>
                      
                  </select>   
                </div>
                
          </td>
          <td>
             <button type="submit" class="btn btn-primary btn-xs" style="display:inline" >Ok</button>
            </form>
         <form action="{{route('cart.destroy',$cartItem->rowId)}}" method="POST" style="display:inline">  <input type="hidden" name="_method" value="DELETE">
    <input type="hidden" name="_token" value="{{ csrf_token() }}"><button type="submit" class="btn btn-sm btn-danger"> Delete</button> </form>
          </td>
        </tr>
        @endforeach
        <tr>
          <td></td>
          <td></td>
          <td>Tax : ${{Cart::tax()}} <br>
            Subtotal: ${{Cart::subtotal()}}<br>
            Grand Total ${{Cart::total()}}</td>
          <td>{{Cart::count()}} Items ordered</td>
        </tr>
        
      </tbody>
    </table>
    <a href="{{url('checkout')}}" class="btn btn-info btn-sm" role="button" style="pull-right">Checkout</a><br><br>
    </div>
    </div>
  </div>


  @endsection
