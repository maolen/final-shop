<?php

use Illuminate\Http\Request;

Route::post('login', 'UserController@login');
Route::post('register', 'UserController@register');
Route::get('/products', 'ProductController@index');
Route::post('/upload-file', 'ProductController@uploadFile');
Route::get('/products/{product}', 'ProductController@show');
Route::get('/users','UserController@index');
Route::get('users/{user}','UserController@show');
Route::patch('users/{user}','UserController@update');
Route::get('users/{user}/orders','UserController@showOrders');
Route::patch('products/{product}/units/add','ProductController@updateUnits');
Route::patch('orders/{order}/deliver','OrderController@deliverOrder');