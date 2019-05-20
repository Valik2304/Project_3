@extends('layouts.home')

@section('header')
    <ul><li><h3><a href="{!!route('home') !!}">на головну сторінку</a></h3></li></ul>
    @include('site.header')
@endsection

@section('catalog_content')
    <h1 align="center">Обраний товар</h1>
    <br/>
    @include('product.basket_content')
@endsection
