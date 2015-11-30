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

Route::get('admin/category', 'AdminCategoriesController@index');

Route::get('admin/products', 'AdminProductsController@index');

//Route::get('admin/category', function () {
//    $categories = CodeCommerce\Category::all();
//    return view('admin/category', compact('categories'));
//});
//
//Route::get('admin/product', function(){
//    $products = CodeCommerce\Product::all();
//    return view('admin/product', compact('products'));
//});
