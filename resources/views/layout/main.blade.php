<!doctype html>
<html class="no-js" lang="en" dir="ltr">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="x-ua-compatible" content="ie=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title> My ecommerce shop - @yield('title') </title>
        <link rel="stylesheet" type="text/css" href="{{asset('maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{asset('dist/css/foundation.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{asset('dist/css/app.css')}}"/>
        <link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/admin.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
        {{-------font awesome CDN below--------}}
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    </head>
    <body>

        <div class="navbar navbar-default" >
<div class="container-fluid">
<div class="navbar-header">
<button type="button" class="navbar-toggle"
➥data-toggle="collapse" data-target="#mynavbar-content">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="{{route('front')}}"><h4><i class="fa fa-home fa-lg" aria-hidden="true">
                        </i>
                       IFECO SHIRTS</h4></a>
</div><br>
<div class="collapse navbar-collapse" id="mynavbar-content">
<ul class="nav navbar-nav">
{{--<li class="active"><a href="#">Home</a></li>--}}
<li><a href="{{url('/shirts')}}">SHIRTS</a></li>
<li><a href="{{route('home')}}">CONTACT</a></li>
<li><a href="{{route('home')}}">ABOUT US</a></li>

<li><a href="{{route('cart.index')}}">  <i class="fa fa-shopping-cart fa-sm" aria-hidden="true">
                            </i>
                            CART
                            <span style="color:red; height:2px; background-color:#efefef; display:inline;" class="alert badge lg">
                                {{Cart::count()}}
                            </span></a></li>
  {{-------------Authentication links------------------}}
            @if(Auth::guest())
            <li><a href="{{route('login')}}">Login</a></li>
            <li><a href="{{route('register')}}">Register</a></li>
            @else
           <li>
                <form action="{{route('logout')}}" method="POST"  >  <input type="hidden" name="_method" value="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}"> <button type="submit" class="btn btn-sm btn-success"> Logout</button> </form>
              </li>
            @endif

</ul>
</div>
</div>
</div>





       {{-- <div  class="top-bar">
            <div style="color:white" class="top-bar-left">
                <h4 class="brand-title">
                    <a href="{{route('front')}}">
                        <i class="fa fa-home fa-lg" aria-hidden="true">
                        </i>
                       IFECO SHIRTS
                    </a>
                </h4>
            </div>
            <div class="top-bar-right" style="display:inline;">
                <ul class="menu" >
                    <li>
                        <a href="{{url('/shirts')}}" class="list1">
                            SHIRTS
                        </a>
                    </li>
                    <li>
                        <a href="{{route('home')}}">
                            CONTACT
                        </a>
                    </li>
                    <li>
                        <a href="{{route('home')}}">
                            ABOUT US
                        </a>
                    </li>
                    <li>
                        <a href="{{route('cart.index')}}">
                            <i class="fa fa-shopping-cart fa-sm" aria-hidden="true">
                            </i>
                            CART
                            <span style="color:red; " class="alert badge">
                                {{Cart::count()}}
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>--}}
        
        @yield('content')
        

<footer class="footer">
    <div class="container">
        <div class="col-md-4">
        <i class="fi-laptop"></i>
      <p>Coded with love by AJIMAH IFEANYI just for the love of codes.</p>
  </div>
        <div class="col-md-4">
            <i class="fi-html5"></i>
      <p>Welcome to our shop. Catch fun as you shop with us</p>
        </div>
        <div class="col-md-4">
            <h4>Follow Us:</h4>
            <ul class="footer-links">
                <li><a href="#">GitHub</a></li>
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Twitter</a></li>
            </ul>
        </div>
    </div>
</footer>

    
    
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script type="text/javascript">
    Stripe.setPublishableKey('pk_test_GryUHqXe48kgNc75J2BovmeN');
</script>

    <script src="{{asset('dist/js/vendor/jquery.js')}}"></script>
    <script src="{{asset('dist/js/app.js')}}"></script>

    
    </body>
</html>

