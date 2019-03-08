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


Route::get('/root', 'Admin\AdminController@index')->name('admin');

Auth::routes();
Route::group(['prefix' => 'root', 'middleware' => ['auth']], function() {
    Route::get('/logout', function () {
        Auth::logout();
        return redirect('/root');
    })->name('admin.logout');

    Route::get('/dashboard', 'Admin\AdminController@getDashboard')->name('admin.dashboard');

    /*=========================================
      Car Brand
    =========================================*/
    Route::resource('brands', 'Admin\BrandController', ['as' => 'admin']);

    /*=========================================
      Fuel Types
    =========================================*/
    Route::get('/fuel-types', 'Admin\FuelTypeController@index')->name('admin.fuel-types');
    Route::post('/fuel-types', 'Admin\FuelTypeController@create')->name('admin.fuel-types');
    Route::post('/fuel-type/purge', 'Admin\FuelTypeController@purge')->name('admin.fuel-types.delete');
    Route::post('/fuel-type/edit', 'Admin\FuelTypeController@edit')->name('admin.fuel-types.edit');

    /*=========================================
      Car Features
    =========================================*/
    Route::get('/car-features', 'Admin\FeatureController@index')->name('admin.car-features');
    Route::post('/car-features', 'Admin\FeatureController@create')->name('admin.car-features');
    Route::post('/car-feature/purge', 'Admin\FeatureController@purge')->name('admin.car-features.delete');
    Route::post('/car-feature/edit', 'Admin\FeatureController@edit')->name('admin.car-features.edit');
});

Route::get('/', function () {
    return view('welcome');
})->name('index');

Route::get('/car-listing', function () {
    return view('listing');
})->name('listing');

Route::get('/single-car', function () {
    return view('single');
})->name('single');
