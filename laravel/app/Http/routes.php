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

Route::get('/', ['as' => 'home', 'uses' => 'AdminController@index', 'middleware'=> 'auth']);

// Authentication routes...
Auth::routes();

Route::group(['middleware' => 'auth'], function() {
    Route::resource('products', 'ProductsController');
    Route::resource('categories', 'CategoriesController');
    Route::resource('clients', 'ClientsController');
    Route::resource('quotes', 'QuotesController');
    Route::resource('currencies', 'CurrenciesController');
    Route::resource('groups', 'GroupsController');
    Route::resource('discounts', 'DiscountsController');
    Route::resource('status', 'StatusController');

    Route::get('users/search', ['as' => 'client.search', 'uses' => 'ClientsController@search']);
    Route::get('categories/search', ['as' => 'category.search', 'uses' => 'CategoriesController@search']);
    Route::get('quotes/search', ['as' => 'quote.search', 'uses' => 'QuotesController@search']);
    Route::get('currencies/search', ['as' => 'currency.search', 'uses' => 'CurrenciesController@search']);
    Route::get('groups/search', ['as' => 'group.search', 'uses' => 'GroupsController@search']);
    Route::get('discounts/search', ['as' => 'discount.search', 'uses' => 'DiscountsController@search']);
    Route::get('status/search', ['as' => 'status.search', 'uses' => 'StatusController@search']);

    // Users
    Route::get('user/{user}/quotes', 'UsersController@getQuotes');	
    Route::get('profile/{user}', ['as' => 'profile', 'uses' => 'UsersController@profile'])->middleware('auth');

});

//Route::group(['middleware' => 'auth', 'before' => 'has_role:admin', 'prefix' => 'admin', 'namespace' => 'Admin'], function() {
Route::get('/', 'AdminController@index');

Route::get('users', ['as' => 'users', 'uses' => 'UsersController@index']);
Route::get('users/search', ['as' => 'users.search', 'uses' => 'UsersController@search']);
Route::get('users/create', ['as' => 'users.create', 'uses' => 'UsersController@create']);
Route::delete('users/{user}', ['as' => 'users.destroy', 'uses' => 'UsersController@destroy']);
Route::get('users/{user}/edit', ['as' => 'users.edit', 'uses' => 'UsersController@edit']);
Route::get('users/{user}', ['as' => 'users.show', 'uses' => 'UsersController@show']);
Route::post('users', ['as' => 'users.store', 'uses' => 'UsersController@store']);
Route::put('manage-quotes/{users}', 'UsersController@manageQuotes');
Route::put('users/{user}', ['as' => 'users.update', 'uses' => 'UsersController@update']);
//| PATCH | quotes/{quotes} | App\Http\Controllers\QuotesController@update 

//});
