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

Route::get('/', 'ProductController@list');
Route::get('/produtos/mostra/{id}', 'ProductController@show')->where('id','[0-9]+');
Route::get('/produtos/novo','ProductController@new');
Route::post('/produtos/adiciona', 'ProductController@add');
Route::get('/produtos/remove/{id}', 'ProductController@remove');
Route::get('/produtos/json', 'ProductController@listaJson');
Route::get('/produtos/atualiza_form/{id}', 'ProductController@change');
Route::post('/produtos/atualizado/{id}', 'ProductController@update');


Route::group(['prefix' => 'carrinho'], function () {

	Route::get('/buy', 'CartController@listToBuy');
	Route::get('/', 'CartController@Product_cartList')->name('carrinho');
	Route::post('/adiciona/{id}', 'CartController@CartAddProduct');
	Route::get('/remove/{id}', 'CartController@ProductDelete');
	Route::post('/atualizaqtda', 'CartController@atualizaCarrinho');
	Route::post('/atualizaqtdb', 'CartController@atualizaCarrinhob');

});

Auth::routes();

#Route::get('/home', 'HomeController@index')->name('home');
Route::get('/login_user', 'Auth\LoginController@form');
Route::post('/login_user', 'Auth\LoginController@login');
Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/register_user', 'Auth\RegisterController@form');
Route::post('/register_user', 'Auth\RegisterController@create');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'checkout'], function () {

	Route::get('/comprando', 'CheckOutController@cadastro');	
	Route::post('/adiciona_endereco', 'AddressController@add');
	Route::get('/carrinho/{id}', 'CheckOutController@informacoes')->name('checkout.carrinho');
	Route::get('/close/{id}', 'CheckOutController@close');	

});
Auth::routes();