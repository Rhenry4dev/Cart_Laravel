<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
$api = app('api.router');

$api->version('v1.0', function ($api) {
    $api->group(['middleware' => 'api.auth'], function ($api) {

    	$api->get('products', 'App\Http\Controllers\API\ProductController@index');
        $api->get('products/{id}', 'App\Http\Controllers\API\ProductController@show');
        $api->post('products/store', 'App\Http\Controllers\API\ProductController@store');
        $api->put('products/{id}/update', 'App\Http\Controllers\API\ProductController@update');
        $api->delete('products/{id}', 'App\Http\Controllers\API\ProductController@destroy');

        $api->get('users', 'App\Http\Controllers\API\UserController@index');
        $api->get('users/{id}', 'App\Http\Controllers\API\UserController@show');
        $api->post('users/store', 'App\Http\Controllers\API\UserController@store');
        $api->put('users/{id}/update', 'App\Http\Controllers\API\UserController@update');
        $api->delete('users/{id}', 'App\Http\Controllers\API\UserController@destroy');

        $api->get('orders', 'App\Http\Controllers\API\OrderController@index');
        $api->get('orders/{id}', 'App\Http\Controllers\API\OrderController@show');        

    });
});






