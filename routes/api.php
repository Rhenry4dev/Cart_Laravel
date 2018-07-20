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
        $api->post('products/update', 'App\Http\Controllers\API\ProductController@update');
        $api->post('products/{id}', 'App\Http\Controllers\API\ProductController@delete');
        $api->get('users', 'App\Http\Controllers\API\UserController@index');

    });
});






