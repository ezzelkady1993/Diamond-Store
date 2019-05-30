<?php

if(version_compare(PHP_VERSION, '7.2.0', '>=')) {
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
}

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

Route::get('/', 'FrontController@index')->name('home');

Route::get('rings','FrontController@rings')->name('rings');

Route::get('necklace','FrontController@necklace')->name('necklace');

Route::get('watches','FrontController@watches')->name('watches');

Route::get('reserve','FrontController@reserve')->name('reserve');

Route::get('/logout','Auth\LoginController@logout');


Auth::routes();

Route::get('/home', 'HomeController@index');
Route::resource('/cart', 'CartController');


Route::get('/cart/add-item/{id}', 'CartController@addItem')->name('cart.addItem');

Route::group(['prefix' => 'admin', 'middleware' => ['auth','admin']],function(){

	Route::post('toggledeliver/{orderId}', 'OrderController@toggledeliver')->name('toggle.deliver');

	Route::get('/',function(){
		return view('admin.index');
	})->name('admin.index');

	Route::resource('product','ProductsController');
	Route::resource('category','CategoriesController');

	Route::get('orders/{type?}','OrderController@Orders');
});

Route::resource('address', 'AddressController');

Route::group(['middleware' => 'auth'], function () {
    Route::get('shipping-info','CheckoutController@shipping')->name('checkout.shipping');
    
});


//Route::get('checkout','CheckoutController@step1');
Route::get('payment','CheckoutController@payment')->name('checkout.payment');
Route::post('store-payment','CheckoutController@storePayment')->name('payment.store');
