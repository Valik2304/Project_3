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
    Route::match(['get','post','delete'],'/basketadd',['uses'=>'BasketAddController@execute'])->name('basketadd');
    Route::match(['get','post','delete'],'/basketdelete',['uses'=>'BasketDeleteController@execute'])->name('basketdelete');
    Route::match(['get','post','delete'],'/basketdeleteone',['uses'=>'BasketDeleteOneController@execute'])->name('basketdeleteone');

    Route::match(['get','post','delete'],'/orders',['uses'=>'OrdersController@execute'])->name('orders');

//    Route::match(['get','post','delete'],'/basketdeleteone/cd',['uses'=>'BasketDeleteOneController@execute2'])->name('basketdeleteone');


    Route::match(['get','post'],'/account',['uses'=>'EntranceController@execute'])->name('account');
//    Route::match(['get','post'],'/account2',['uses'=>'EntranceController2@execute2'])->name('account2');

    Route::match(['get','post'],'/login',['uses'=>'LoginController@execute'])->name('login');
    Route::match(['get','post'],'/login2',['uses'=>'Login2Controller@execute'])->name('login2');

    Route::get('/category{id}',['uses'=>'CategoryController@execute'])->name('category');


});