<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('get/userinfo', 'TestController@getUserInfo');
Route::post('shopsone', 'ShopsController@getShopsOne');
Route::post('shopstwo', 'ShopsController@getShopsTwo');
Route::post('shop', 'ShopsController@getShopDetail');
Route::post('product', 'ShopsController@getShopProduct');

Route::get('webservice', 'TestController@webservice');
Route::get('webserviceclient', 'TestController@soapClient');

Route::get('image/{picname}', 'ImageController@get')->where('picname', '(?i).+?\\.(jpg|gif|bmp)');
