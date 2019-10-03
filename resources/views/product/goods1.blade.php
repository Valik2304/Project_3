@extends('layouts.home')

@section('header')
    {{--<ul><li><h3><a href="{!!route('home') !!}">Головна сторінка</a></h3></li></ul>--}}
    @include('site.header')
    <ul><li><h5><a href="{!!route('home') !!}" class="border-top btn-success">на головну сторінку</a></h5></li></ul>
@endsection

@section('catalog')
    @include('site.catalog')
@endsection

@section('catalog_content')
    @include('product.catalog_content')
@endsection