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

Route::get('/pre-register', 'Auth\RegisterController@getUserType');

Route::get('/home', 'HomeController@search')->name('home');
Route::get('/home/profile/{company}', 'CompanyController@profile')->name('company.profile');


Route::get('/profile', 'ProfileController@show');

Route::get('/profile/edit-info', 'CompanyController@editInfo')->name('company.profile.info.edit');
Route::put('/profile/update-info', 'CompanyController@updateInfo')->name('company.profile.info.update');
Route::get('/profile/products', 'CompanyController@editProducts')->name('company.profile.products');
Route::post('/profile/products/new', 'CompanyController@newProduct')->name('company.profile.product.new');
Route::post('/profile/products', 'CompanyController@delProduct')->name('company.profile.product.delete');

Route::get('/profile/service-countries', 'CompanyController@serviceCountries')->name('company.profile.service.countries');
Route::post('/profile/service-countries/add', 'CompanyController@addCountries')->name('company.profile.add.countries');

Route::post('/products', 'CompanyController@products')->name('company.products');

Route::get('/api/countries', 'CountryController@index');
Route::get('/api/industries', 'IndustryController@index');