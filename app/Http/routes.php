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

Route::group(['prefix' => 'admin'], function() {
    Route::get('categories', ['as' => 'admin/categories', 'uses' => 'AdminCategoriesController@index']);
    Route::post('categories', ['as' => 'admin/categories.store', 'uses' => 'AdminCategoriesController@store']);
    Route::get('categories/create', ['as' => 'admin/categories.create', 'uses' => 'AdminCategoriesController@create']);
    Route::get('categories/{id}/edit', ['as' => 'admin/categories.edit', 'uses' => 'AdminCategoriesController@edit']);
    Route::put('categories/{id}/update', ['as' => 'admin/categories.update', 'uses' => 'AdminCategoriesController@update']);
    Route::get('categories/{id}/destroy', ['as' => 'admin/categories.destroy', 'uses' => 'AdminCategoriesController@destroy']);

    Route::get('products', ['as' => 'admin/products', 'uses' => 'AdminProductsController@index']);
    Route::post('products', ['as' => 'admin/products.store', 'uses' => 'AdminProductsController@store']);
    Route::get('products/create', ['as' => 'admin/products.create', 'uses' => 'AdminProductsController@create']);
    Route::get('products/{id}/edit', ['as' => 'admin/products.edit', 'uses' => 'AdminProductsController@edit']);
    Route::put('products/{id}/update', ['as' => 'admin/products.update', 'uses' => 'AdminProductsController@update']);
    Route::get('products/{id}/destroy', ['as' => 'admin/products.destroy', 'uses' => 'AdminProductsController@destroy']);
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
