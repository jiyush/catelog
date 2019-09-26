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

Route::get('/category', 'industriesController@AllIndustry')->name('industry.all');
Route::get('/subcategory/{id}', 'industriesController@subcategory')->name('subcategory');
Route::get('industries/{id?}', 'industriesController@industry')->name('industries');
Route::get('/about', 'aboutusController@index')->name('about');
Route::get('/industry', 'industriesController@mixed')->name('mixed');
Route::get('/industry/{id}', 'industriesController@detail')->name('industry');
Route::get('contactus', 'aboutusController@contact')->name('contactus');
Route::post('/contact/email', 'aboutusController@sendContact')->name('contact.email');

Route::post('/review', 'aboutusController@sendReview')->name('review.send');

// XHR
Route::get('/getsub/{id?}', 'SubCategoryController@getsub')->name('getsub');
Route::get('/city/{id?}', 'SubCategoryController@city')->name('city');

Route::get('/terms', function(){
	return view('front.terms');
})->name('term');

Route::get('/policy', function(){
	return view('front.policy');
})->name('policy');

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

	// Sub category
	Route::get('/subcategory', 'SubCategoryController@list')->name('sub.list');
	Route::get('/subcategory/add', 'SubCategoryController@add')->name('sub.add');
	Route::post('/subcategory/store', 'SubCategoryController@store')->name('sub.store');
	Route::get('/subcategory/edit/{id}', 'SubCategoryController@edit')->name('sub.edit');
	Route::post('/subcategory/update', 'SubCategoryController@update')->name('sub.update');
	Route::post('/subcategory/delete', 'SubCategoryController@delete')->name('sub.delete');


	//industries
	Route::get('/industries', 'industriesController@list')->name('industry.list');
	Route::get('/industries/add', 'industriesController@add')->name('industry.add');
	Route::post('/industries/store', 'industriesController@store')->name('industry.store');
	Route::get('/industries/edit/{id}', 'industriesController@edit')->name('industry.edit');
	Route::get('/industries/view/{id}', 'industriesController@view')->name('industry.view');
	Route::post('/industries/update', 'industriesController@update')->name('industry.update');
	Route::post('/industries/delete', 'industriesController@delete')->name('industry.delete');
	Route::get('/industries/{id}/image', 'industriesController@getImage')->name('image.list');
	Route::post('/industries/{id}/image', 'industriesController@delImage')->name('image.remove');
	Route::post('/industry/{id}/image/add', 'industriesController@addImage')->name('image.add');


	// Inquuiry
	Route::get('/inquuiry', 'inquuiryController@index')->name('inquiry.list');

	//Apruval
	Route::get('/apruval', 'ApruvalController@list')->name('apruval.list');
	Route::get('/apruval/{id}', 'ApruvalController@show')->name('apruval.show');
	Route::post('/apruval/add/{id}', 'ApruvalController@addIndustry')->name('apruval.add');
	Route::post('/apruval/remove/{id}', 'ApruvalController@remove')->name('apruval.remove');

	//Admin user Routes
	Route::get('/profile', 'AdminController@show')->name('user.profile');
	Route::post('/profile/change', 'AdminController@changPassword')->name('user.password');
});


Route::get('/home', 'HomeController@index')->name('home');
