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

Route::get('/homesss', function () {
    return view('welcome');
});

Route::get('/', 'FrontController@index')->name('front');
Route::get('/shirts', 'FrontController@shirts')->name('shirts');
Route::get('/shirt/{id}', 'FrontController@shirt')->name('shirt');
Auth::routes();

Route::get('/logout', function(){  /*Alternatively: Route::get('/logout', 'Auth\LoginController@logout');*/
 Auth::logout();
 return redirect()->route('front');
});

Route::resource('cart','CartController');
Route::get('cart/add-items/{id}','CartController@addItem')->name('cart.addItem');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('address','AddressController');

/*Route::get('/home', 'HomeController@index')->name('home');*/

/*Route::group(['prefix'=>'admin', 'middleware'=>'auth'], function(){
	return view('admin.index')->name('admin.index');
});
*/
/*Note: when a route is named eg ->name('profile'), must then be accessed like this from the views: $url=route('profile') or {{route('profile')}}*/


	Route::group(['prefix'=>'admin', 'middleware'=>['auth','admin']], function(){

	Route::get('/', function(){
		return view('admin.index');
	})->name('admin.index');
	Route::get('/logout', 'Auth\LoginController@logout');
	//Route::get('/product/create', 'ProductController@create')->middleware('auth');
	Route::resource('product', 'ProductController');
	Route::resource('category', 'CategoryController');
});

Route::get('checkout','CheckoutController@step1');
Route::get('shipping-info','CheckoutController@shipping')->name('checkout.shipping');
Route::get('payment','CheckoutController@payment')->name('checkout.payment');

