{{-- Side Navigation --}}

<div class="col-md-2">
    <div class="sidebar content-box" style="display: block;">
        <ul class="nav">
            <!-- Main menu -->
            <li style="color:#23527C; font-size:20px; padding-left: 20px;"> {{"  Welcome  " . Auth::user()->name}}</li>
            <li class="current"><a href="{{route('admin.index')}}"><i class="glyphicon glyphicon-home"></i>
                    Dashboard</a></li>
            <li class="submenu">
                <a href="#">
                    <i class="glyphicon glyphicon-list"></i> Products
                    <span class="caret pull-right"></span>
                </a>
                <!-- Sub menu -->
                <ul>
                    <li><a href="{{route('product.index')}}"> View /Delete Products</a></li>
                    <li><a href="{{route('product.create')}}">Add Product</a></li>
                    <li><a href="{{route('shirts')}}">View shirts</a></li>
                    <li><a href="{{route('category.index')}}"> Add categories </a></li>
                </ul>
            </li>
        </ul>
    </div>
</div> <!-- ADMIN SIDE NAV-->