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
    Route::get('/settings', 'Admin\SettingsController@index')->name('admin.settings');
    Route::post('/settings', 'Admin\SettingsController@store')->name('admin.settings');

    /*=========================================
     Vehicle
    =========================================*/
    Route::resource('vehicles', 'Admin\VehicleController', ['as' => 'admin']);
    Route::get('/vehicle-photo/{photo_id}/delete', 'Admin\VehicleController@removePhoto')->name('admin.vehicle-photo.remove');
    Route::post('/vehicle-photo/{vehicle_slug}/add', 'Admin\VehicleController@addPhotos')->name('admin.vehicle-photo.add');

    /*=========================================
     Vehicle
    =========================================*/
    Route::get('/vehicle-contact', 'Admin\VehicleContactController@index')->name('admin.contact.index');
    Route::get('/vehicle-contact/{id}', 'Admin\VehicleContactController@show')->name('admin.contact.show');
    Route::post('/vehicle-contact/{id}/delete', 'Admin\VehicleContactController@deleteMessage')->name('admin.contact.delete');

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

    /*=========================================
     User account routes: view, edit profile and change password
    =========================================*/
    Route::get('/user-profile', 'Admin\UserProfileController@index')->name('admin.user-profile');
    Route::post('/user-profile', 'Admin\UserProfileController@editProfile')->name('admin.user-profile');
    Route::post('/user-profile/change-password', 'Admin\UserProfileController@changePassword')->name('admin.user-profile.password');

});

Route::get('/', 'PageController@index')->name('index');

Route::get('/car-listing', 'PageController@carListing')->name('listing');

Route::get('/single-car/{slug}', 'PageController@showCar')->name('single');

Route::post('/contact-seller/{slug}', 'PageController@contactSeller')->name('contact.seller');

Route::get('/about-us', 'PageController@aboutUs')->name('aboutus');

Route::get('/services', 'PageController@services')->name('services');

Route::get('/contact', 'PageController@contact')->name('contact');
Route::post('/contact', 'PageController@postContact')->name('contact');

Route::get('/image', function() {
    return view('test');
});

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});