<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/




Route::group([], function (){

    Route::match(['get','post'], '/', ['uses'=>'IndexController@execute'])->name('home');

    Route::get('/goods{id}',['uses'=>'GoodsController@execute'])->name('good');

    Route::match(['get','post','delete'],'/basket',['uses'=>'BasketController@execute'])->name('basket');
    Route::match(['get','post','delete'],'/basket/add',['uses'=>'BasketAddController@execute'])->name('basketadd');

  //  Route::get('/entrance',['uses'=>'EntranceController@execute', 'as'=>'entrance']);

    Route::match(['get','post'],'/login',['uses'=>'LoginController@execute'])->name('login');

    Route::get('/category{id}',['uses'=>'CategoryController@execute'])->name('category');


});