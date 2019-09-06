<div class="header-middle"><!--header-middle-->
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="logo pull-left">

                </div>
            </div>
            <div class="col-sm-8">
                <div class="shop-menu pull-right">
                    <ul class="nav navbar-nav">
                        <li><a href="{{route('basketadd')}}"><i class="fa fa-shopping-cart"></i> Корзина</a></li>
                        <li><a href="дороби код!"><i class="fa fa-user"></i> Акаунт</a></li>
                        <li><a href="{{route('login')}}"><i class="fa fa-lock"></i> Вхід</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div><!--/header-middle--><br/>
@if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

{{--{{dd($_COOKIE['cart'])}}--}}

<!--/header-bottom-->
{{--@foreach($good as $go)--}}
{{--@endforeach--}}