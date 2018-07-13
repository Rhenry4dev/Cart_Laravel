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

Route::get('/', 'ProductController@list')->name('index');
Route::get('/produtos/mostra/{id}', 'ProductController@show')->where('id','[0-9]+')->name('produto.mostra');
Route::get('/produtos/novo','ProductController@new')->name('produto.novo');
Route::post('/produtos/adiciona', 'ProductController@add')->name('produto.adiciona');
Route::get('/produtos/remove/{id}', 'ProductController@remove')->name('produto.remove');
Route::get('/produtos/json', 'ProductController@listaJson')->name('produto.json');
Route::get('/produtos/atualiza_form/{id}', 'ProductController@change')->name('produto.atualiza-form');
Route::post('/produtos/atualizado/{id}', 'ProductController@update')->name('produto.atualizado');


Route::group(['prefix' => 'carrinho'], function () {

	Route::get('/buy', 'CartController@listToBuy')->name('carrinho.buy');
	Route::get('/', 'CartController@Product_cartList')->name('carrinho');
	Route::post('/adiciona/{id}', 'CartController@CartAddProduct')->name('carrinho.adiciona');
	Route::get('/remove/{id}', 'CartController@ProductDelete')->name('carrinho.remove');
	Route::post('/atualizaqtda', 'CartController@atualizaCarrinho')->name('carrinho.atualizaqtda');
	Route::post('/atualizaqtdb', 'CartController@atualizaCarrinhob')->name('carrinho.atualizaqtdb');

});

Auth::routes();

#Route::get('/home', 'HomeController@index')->name('home');
Route::get('/login_user', 'Auth\LoginController@form')->name('login_user-form');
Route::post('/login_user', 'Auth\LoginController@login')->name('post-login_user-form');
Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/register_user', 'Auth\RegisterController@form');
Route::post('/register_user', 'Auth\RegisterController@create');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'checkout'], function () {

	Route::get('/comprando', 'CheckOutController@cadastro')->name('checkout.comprando');	
	Route::post('/adiciona-endereco', 'AddressController@add')->name('checkout.adiciona-endereco');
	Route::get('/carrinho/{id}', 'CheckOutController@informacoes')->name('checkout.carrinho');
	Route::get('/close/{id}', 'CheckOutController@close')->name('checkout.close');	

});
Auth::routes();