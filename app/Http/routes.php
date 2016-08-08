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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin', 'where' => ['id' => '[0-9]+']], function() {
    Route::group(['prefix' => 'categories'], function() {
        Route::get('', ['as' => 'admin/categories', 'uses' => 'AdminCategoriesController@index']);
        Route::post('', ['as' => 'admin/categories.store', 'uses' => 'AdminCategoriesController@store']);
        Route::get('create', ['as' => 'admin/categories.create', 'uses' => 'AdminCategoriesController@create']);
        Route::get('{id}/edit', ['as' => 'admin/categories.edit', 'uses' => 'AdminCategoriesController@edit']);
        Route::put('{id}/update', ['as' => 'admin/categories.update', 'uses' => 'AdminCategoriesController@update']);
        Route::get('{id}/destroy', ['as' => 'admin/categories.destroy', 'uses' => 'AdminCategoriesController@destroy']);
    });

    Route::group(['prefix' => 'products'], function() {
        Route::get('', ['as' => 'admin/products', 'uses' => 'AdminProductsController@index']);
        Route::post('', ['as' => 'admin/products.store', 'uses' => 'AdminProductsController@store']);
        Route::get('create', ['as' => 'admin/products.create', 'uses' => 'AdminProductsController@create']);
        Route::get('{id}/edit', ['as' => 'admin/products.edit', 'uses' => 'AdminProductsController@edit']);
        Route::put('{id}/update', ['as' => 'admin/products.update', 'uses' => 'AdminProductsController@update']);
        Route::get('{id}/destroy', ['as' => 'admin/products.destroy', 'uses' => 'AdminProductsController@destroy']);
    });

    Route::group(['prefix' => 'users'], function() {
        Route::get('', ['as' => 'admin/users', 'uses' => 'AdminUsersController@index']);
        Route::post('', ['as' => 'admin/users.store', 'uses' => 'AdminUsersController@store']);
        Route::get('create', ['as' => 'admin/users.create', 'uses' => 'AdminUsersController@create']);
        Route::get('{id}/edit', ['as' => 'admin/users.edit', 'uses' => 'AdminUsersController@edit']);
        Route::put('{id}/update', ['as' => 'admin/users.update', 'uses' => 'AdminUsersController@update']);
        Route::get('{id}/destroy', ['as' => 'admin/users.destroy', 'uses' => 'AdminUsersController@destroy']);
    });
});
//Route::get('admin/category', function () {
//    $categories = CodeCommerce\Category::all();
//    return view('admin/category', compact('categories'));
//});
//
//Route::get('admin/product', function(){
//    $products = CodeCommerce\Product::all();
//    return view('admin/product', compact('products'));
//});
