<?php

namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Category;
use CodeCommerce\Product;
use Illuminate\Http\Request;

use CodeCommerce\Http\Requests;
use CodeCommerce\Http\Controllers\Controller;

class StoreController extends Controller
{
    public function index(){
        $categories = Category::all();
        $pFeatured = Product::featured()->get();
        $pRecommend = Product::recommend()->get();
        return view('store.index', compact('categories', 'pFeatured', 'pRecommend'));
    }

    public function category($id, Category $category){
        $categories = Category::all();
        $cat = $category->find($id);
        $catProducts = $cat ? $cat->products()->get() : null;
        return view('store.by_category', compact('categories', 'category', 'catProducts'));
    }
}
