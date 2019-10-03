@extends('layouts.home')

@section('header')
    <ul><li><h5><a href="{!!route('basketadd') !!}" class="border-top btn-success">в корзину </a></h5></li></ul>
    @include('site.header')
@endsection

@section('catalog_content')
    <h1 align="center">Замовлення</h1>
    <br/>
    @include('product.order_content')
@endsection
