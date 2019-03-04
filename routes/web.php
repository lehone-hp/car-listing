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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function() {
    Route::get('/dashboard', 'Admin\AdminController@getDashboard')->name('admin.dashboard');

    Route::get('/brands', 'Admin\BrandController@index')->name('admin.brands');

    Route::get('/fuel-types', 'Admin\FuelTypeController@index')->name('admin.fuel-types');

});
