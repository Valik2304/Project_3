{{--{{dd($good>where('id',5))}}--}}
@extends('layouts.home')

@section('header')
    <ul><li><h3><a href="{!!route('home') !!}">Головна сторінка</a></h3></li></ul>
    @include('site.header')
@endsection

@section('catalog')
    @include('site.catalog')
@endsection

@section('catalog_content')

    <div class="col-sm-9 padding-right">
        <div class="features_items"><!--features_items-->
                <h2 class="title text-center">Товар з категорії...</h2>
                @foreach($good as $k => $go)
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">

                                    <a href="{{route('good', array('id'=>$go->id))}}"><img src="{{ asset($go->image) }}"width="350" height="375"></a>
                                    <h2>{{$go->price}}</h2>
                                    <a href="">
                                        <p>{{$go->name}}</p>
                                    </a>

                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>В корзину</a>
                                </div>
                            </div>
                        </div>
                    </div>
                  @endforeach
        </div><!--features_items-->
    </div>
@endsection