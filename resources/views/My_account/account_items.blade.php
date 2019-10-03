@extends('layouts.home')

@section('header')
    {{--<ul><li><h3><a href="{!!route('home') !!}"><- на головну сторінку</a></h3></li></ul>--}}
    @include('site.header')
    <ul><li><h5><a href="{!!route('home') !!}" class="border-top btn-success">на головну сторінку</a></h5></li></ul>
@endsection

@section('catalog_content')

    @include('My_account.my_account_items')
@endsection