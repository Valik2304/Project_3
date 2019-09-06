@extends('layouts.home')

@section('header')
    <ul><li><h5><a href="{!!route('home') !!}" class="border-top btn-success">на головну сторінку</a></h5></li></ul>
    @include('site.header')
@endsection

@section('catalog_content')
    <h1 align="center">Обраний товар</h1>
    <br/>
    @include('product.basket_content')
@endsection
