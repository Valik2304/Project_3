<div class="header_top"><!--header_top-->
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="contactinfo">
                    <ul class="nav nav-pills">
                        <li><a href="#"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
                        <li><a href="#"><i class="fa fa-envelope"></i> info@domain.com</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="social-icons pull-right">
                    <ul class="nav navbar-nav">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="header-middle"><!--header-middle-->
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="logo pull-left">
                    <a href="{{route('home')}}"><img src="images/home/logo.png" alt="" /></a>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="shop-menu pull-right">
                    <ul class="nav navbar-nav">
                        <li><a href="{{route('basketadd')}}"><i class="fa fa-shopping-cart"></i> Корзина</a></li>
                        <li><a href="{{route('account')}}"><i class="fa fa-user"></i>Мій акаунт</a></li>
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