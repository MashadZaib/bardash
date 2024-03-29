<?php

use App\Restaurant;

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


Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
	
	Route::get('dashboard', 'Admin\DashboardController@index')->name('admin.dashboard');
	Route::resource('job-categories', 'Admin\JobCategoriesController');
	Route::get('all-orders', 'Admin\OrdersController@all_orders')->name('admin.orders');
	Route::get('all-order-ajax', 'Admin\OrdersController@ajax_orders')->name('ajax.orders');
	
});

Route::group(['prefix' => 'admin'], function () {
	Auth::routes();

});




