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

// Route::get('/', function () {
//     return view('welcome');
// });

//Front Route
Route::get('/', 'categoryController@show')->name('root');
Route::get('/addlisting', 'categoryController@addListing')->name('listing.add');
Route::post('/addlisting', 'categoryController@submitList')->name('listing.submit');

Route::get('/industries', 'industriesController@AllIndustry')->name('industry.all');
Route::get('/about', 'aboutusController@index')->name('about');
Route::get('contactus', 'aboutusController@contact')->name('contactus');



//Admin Login
// Route::get('/admin/login', 'LoginController@login');
Auth::routes(['register' => false]);




// Admin Routes
Route::prefix('admin')->middleware('auth')->group(function(){

	//Dashboard
	Route::get('/', 'dashboardController@index')->name('dashboard');

	// Category
	Route::get('/category', 'categoryController@list')->name('category.list');
	Route::get('/category/add', 'categoryController@add')->name('category.add');
	Route::post('/category/store', 'categoryController@store')->name('category.store');
	Route::get('/category/edit/{id}', 'categoryController@edit')->name('category.edit');
	Route::post('/category/update', 'categoryController@update')->name('category.update');
	Route::post('/category/delete', 'categoryController@delete')->name('category.delete');
	Route::get('category/show', 'categoryController@show')->name('category.show');

	//industries
	Route::get('/industries', 'industriesController@list')->name('industry.list');
	Route::get('/industries/add', 'industriesController@add')->name('industry.add');
	Route::post('/industries/store', 'industriesController@store')->name('industry.store');
	Route::get('/industries/edit/{id}', 'industriesController@edit')->name('industry.edit');
	Route::get('/industries/view/{id}', 'industriesController@view')->name('industry.view');
	Route::post('/industries/update', 'industriesController@update')->name('industry.update');
	Route::post('/industries/delete', 'industriesController@delete')->name('industry.delete');

	// Inquuiry
	Route::get('/inquuiry', 'inquuiryController@index')->name('inquiry.list');

	//Admin user Routes
	Route::get('/profile', 'AdminController@show')->name('user.profile');
	Route::post('/profile/change', 'AdminController@changPassword')->name('user.password');
});


Route::get('/home', 'HomeController@index')->name('home');
