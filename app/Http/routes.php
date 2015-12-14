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
    Route::get('categories', ['as' => 'admincategories', 'uses' => 'AdminCategoriesController@index']);
    Route::post('categories', ['as' => 'admincategories.store', 'uses' => 'AdminCategoriesController@store']);
    Route::get('categories/create', ['as' => 'admincategories.create', 'uses' => 'AdminCategoriesController@create']);
    Route::get('categories/{id}/edit', ['as' => 'admincategories.edit', 'uses' => 'AdminCategoriesController@edit']);
    Route::put('categories/{id}/update', ['as' => 'admincategories.update', 'uses' => 'AdminCategoriesController@update']);
    Route::get('categories/{id}/destroy', ['as' => 'admincategories.destroy', 'uses' => 'AdminCategoriesController@destroy']);

    Route::get('products', ['as' => 'adminproducts', 'uses' => 'AdminProductsController@index']);
    Route::post('products', ['as' => 'adminproducts.store', 'uses' => 'AdminProductsController@store']);
    Route::get('products/create', ['as' => 'adminproducts.create', 'uses' => 'AdminProductsController@create']);
    Route::get('products/{id}/edit', ['as' => 'adminproducts.edit', 'uses' => 'AdminProductsController@edit']);
    Route::put('products/{id}/update', ['as' => 'adminproducts.update', 'uses' => 'AdminProductsController@update']);
    Route::get('products/{id}/destroy', ['as' => 'adminproducts.destroy', 'uses' => 'AdminProductsController@destroy']);
});

    Route::get('categories', ['as' => 'categories', 'uses' => 'CategoriesController@index']);
    Route::post('categories', ['as' => 'categories.store', 'uses' => 'CategoriesController@store']);
    Route::get('categories/create', ['as' => 'categories.create', 'uses' => 'CategoriesController@create']);
    Route::get('categories/{id}/edit', ['as' => 'categories.edit', 'uses' => 'CategoriesController@edit']);
    Route::put('categories/{id}/update', ['as' => 'categories.update', 'uses' => 'CategoriesController@update']);
    Route::get('categories/{id}/destroy', ['as' => 'categories.destroy', 'uses' => 'CategoriesController@destroy']);

    Route::get('products', ['as' => 'products', 'uses' => 'ProductsController@index']);
    Route::post('products', ['as' => 'products.store', 'uses' => 'ProductsController@store']);
    Route::get('products/create', ['as' => 'products.create', 'uses' => 'ProductsController@create']);
    Route::get('products/{id}/edit', ['as' => 'products.edit', 'uses' => 'ProductsController@edit']);
    Route::put('products/{id}/update', ['as' => 'products.update', 'uses' => 'ProductsController@update']);
    Route::get('products/{id}/destroy', ['as' => 'products.destroy', 'uses' => 'ProductsController@destroy']);
//Route::get('admin/category', function () {
//    $categories = CodeCommerce\Category::all();
//    return view('admin/category', compact('categories'));
//});
//
//Route::get('admin/product', function(){
//    $products = CodeCommerce\Product::all();
//    return view('admin/product', compact('products'));
//});
