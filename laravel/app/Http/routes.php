<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// set pattern for overall
Route::pattern('id', '[0-9]+');
Route::pattern('lang', '[0-9a-z]+');

Route::get('/', ['as' => 'home', 'uses' => 'AdminController@index']);


// Authentication routes...
Route::group(['namespace' => 'auth'], function() {
	Route::get('login', ['as' => 'login', 'uses' => 'AuthController@login']);
	Route::get('signup', ['as' => 'signup','uses' => 'AuthController@signup']);
	Route::post('signup', 'AuthController@postLogin');
	Route::get('logout', ['as' => 'logout', 'uses' => 'AuthController@logout']);

	Route::get('confirm-email/{confirmation_code}', ['as' => 'auth.confirm', 'uses' => 'AuthController@confirmEmail']);
    Route::get('resend-email-confirmation', ['as' => 'auth.reconfirm', 'uses' => 'AuthController@resendEmailConfirmation']);
});

// Users
Route::get('user/{username}', ['as' => 'user', 'uses' => 'UsersController@profile']);
Route::get('user/{username}/quotes', 'UsersController@getQuotes');	

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');
Route::get('auth/confirm/{token}', 'Auth\AuthController@getConfirm');

// Resend routes...
Route::get('auth/resend', 'Auth\AuthController@getResend');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

Route::resource('products', 'ProductsController');
Route::resource('categories', 'CategoriesController');
Route::resource('clients', 'ClientsController');
Route::resource('quotes', 'QuotesController');
Route::resource('currencies', 'CurrenciesController');
Route::resource('groups', 'GroupsController');
Route::resource('discounts', 'DiscountsController');
Route::resource('status', 'StatusController');


//Route::group(['middleware' => 'auth', 'before' => 'has_role:admin', 'prefix' => 'admin', 'namespace' => 'Admin'], function() {
Route::get('/', 'AdminController@index');

Route::get('users', ['as' => 'admin.users', 'uses' => 'UsersController@index']);
Route::get('users/search', ['as' => 'admin.users.search', 'uses' => 'UsersController@search']);
Route::get('users/create', 'UsersController@create');
Route::get('edit/{user}', 'UsersController@edit');
Route::post('edit/{user}', 'UsersController@postEdit');
Route::put('manage-quotes/{user}', 'UsersController@manageQuotes');
//});
