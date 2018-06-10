@extends('layout.main')
@section('title', 'Home')
@section('content')

<section class="hero text-center">
            <br/>
            <br/>
            <br/>
            <br/>
            <h2 >
                <strong>
                    Hey! Welcome to MC- Ifeco's Store
                </strong>
            </h2>
            <br>
            <a href="{{url('shirts')}}"><button class="button large">Check out My Shirts</button></a>
        </section>
        <br/>
        <div class="subheader text-center">
             <h2>
            Ifeco&rsquo;s Latest Shirts
        </h2>
        </div>
       
        <!-- Latest SHirts -->
        <div class="row">
            @forelse($shirts->chunk(2) as $chunk)
            @foreach($chunk as $shirt)
            <div class="col-md-3 col-sm-6">
                <div class="item-wrapper">
                    <div class="img-wrapper">
                        <a href="{{route('cart.addItem',$shirt->id)}}" class="button expanded add-to-cart">
                            Add to Cart
                        </a>
                        <a href="{{route('shirt',$shirt->id)}}">
                            <img src="{{url('images', $shirt->image)}}"/>
                        </a>
                    </div>
                    <a href="{{route('shirt',$shirt->id)}}">
                        <h3>
                            {{$shirt->name}}
                        </h3>
                    </a>
                    <h5>
                        {{"$" .$shirt->price}}
                        
                    </h5>
                    <p>
                        {{$shirt->description}}
                    </p>
                </div>
            </div>
            @endforeach
            @empty
            <h3 style="text-align:center;">No shirts</h3>
            
            @endforelse


        </div>


            <!--
            <div class="col-md-3">
                <div class="item-wrapper">
                    <div class="img-wrapper">
                        <a class="button expanded add-to-cart">
                            Add to Cart
                        </a>
                        <a href="#">
                            <img src="http://i.imgur.com/Mcw06Yt.png"/>
                        </a>
                    </div>
                    <a href="#">
                        <h3>
                            Kickin with Kraken Tee
                        </h3>
                    </a>
                    <h5>
                        $19.99
                    </h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin posuere sem enim, accumsan convallis risus semper.
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="item-wrapper">
                    <div class="img-wrapper">
                        <a class="button expanded add-to-cart">
                            Add to Cart
                        </a>
                        <a href="#">
                            <img src="http://i.imgur.com/Mcw06Yt.png"/>
                        </a>
                    </div>
                    <a href="#">
                        <h3>
                            Kickin with Kraken Tee
                        </h3>
                    </a>
                    <h5>
                        $19.99
                    </h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin posuere sem enim, accumsan convallis risus semper.
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="item-wrapper">
                    <div class="img-wrapper">
                        <a class="button expanded add-to-cart">
                            Add to Cart
                        </a>
                        <a href="#">
                            <img src="http://i.imgur.com/Mcw06Yt.png"/>
                        </a>
                    </div>
                    <a href="#">
                        <h3>
                            Kickin with Kraken Tee
                        </h3>
                    </a>
                    <h5>
                        $19.99
                    </h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin posuere sem enim, accumsan convallis risus semper.
                    </p>
                </div>
            </div>
        </div>-->
        <!-- Footer -->
        <br>

@endsection