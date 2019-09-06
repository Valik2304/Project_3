{{--@foreach($input as $v)--}}
    {{--{{dd($input['Password'] && $input['Name'])}}--}}
{{--@endforeach--}}
@extends('layouts.home')

@section('header')
    <ul><li><h3><a href="{!!route('home') !!}"><- на головну сторінку</a></h3></li></ul>
    @include('site.header')
@endsection

@section('catalog_content')

    @include('Account.login_content')
@endsection