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

Route::bind('product',function($id){
	return App\Product::where('id', $id)->first();
});

/*URLS STORE*/

Route::get('/', ['as' => 'inicio', 'uses' => 'StoreController@index']);

Route::get('product/{id}', ['as' => 'product-detail','uses' => 'StoreController@show']);

Route::get('cart/show', ['as' => 'cart-show', 'uses' => 'CartController@show']);

Route::get('cart/add/{product}', ['as' => 'cart-add', 'uses' => 'CartController@add']);

Route::get('cart/delete/{product}', ['as' => 'cart-delete', 'uses' => 'CartController@delete']);

Route::get('cart/trash', ['as' => 'cart-trash', 'uses' => 'CartController@trash']);

Route::get('cart/update/{product}/{quantity?}', ['as' => 'cart-update', 'uses' => 'CartController@update']);

Route::get('order-detail', ['middleware' => 'auth', 'as' => 'order-detail', 'uses' => 'CartController@orderDetail']);

/*URLS ADMIN*/

Route::resource('admin/category', 'Admin\CategoryController');
Route::resource('admin/product', 'Admin\ProductController');
Route::resource('admin/user', 'Admin\UserController');

/*URLS AUTH*/
Auth::routes();

/**/

Route::get('responsePayu/{merchantId?}{merchant_name?}{merchant_address?}{telephone?}{lapTransactionState?}{referenceCode?}{lapPaymentMethod?}{lapPaymentMethodType?}{processingDate?}', 'OrderController@index');