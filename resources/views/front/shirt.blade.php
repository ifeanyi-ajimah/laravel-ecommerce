@extends('layout.main')
@section('title', 'shirt')
@section('content')

<!-- products listing -->
        <!-- Latest SHirts -->
        <div class="row">
            <div class="col-md-5 offset-1 ">
                <div class="item-wrapper">
                    <div class="img-wrapper">
                        <a href="#">
                             <img src="{{url('images', $shirt->image)}}"/>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="item-wrapper">
                    <h3 class="subheader">
                       <span class="price-tag"> $ {{$shirt->price}}</span> {{$shirt->name}}
                    </h3>
                    <div class="row">
                        <div class="col-lg-12">
                            <label>
                                Select Size
                                <select>
                                    <option value="small">
                                        Small
                                    </option>
                                    <option value="medium">
                                        Medium
                                    </option>
                                    <option value="large">
                                        Large
                                    </option>
                                   
                                </select>
                            </label>
                            <a href="{{route('cart.addItem',$shirt->id)}}" class="btn btn-primary btn-md">Add to Cart</a>
                        </div>
                    </div>
                <p class="text-left subheader"><small>* Designed by <a href="#">Ajimah </a></small></p>
                <b>category:</b> &nbsp <span>{{count($shirt->category)?$shirt->category->name: "N/A"}}</Span><br>
                <small>Description:</small>
                <p>{{count($shirt->description)?$shirt->description: "N/A"}}</p>


                </div>
            </div>
        </div>
        @endsection
