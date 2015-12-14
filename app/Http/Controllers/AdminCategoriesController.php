<?php

namespace CodeCommerce\Http\Controllers;

use Illuminate\Http\Request;

use CodeCommerce\Http\Requests;
use CodeCommerce\Http\Controllers\Controller;
use CodeCommerce\Category;

class AdminCategoriesController extends Controller
{
    private $categoryModel;
    
    function __construct(Category $categoryModel) {
        $this->categoryModel = $categoryModel;
    }

    public function index() {
        $categories = $this->categoryModel->all();
        return view('admincategories.index', compact('categories'));
    }
    
    public function create() {
        return view('admincategories.create');
    }
    
    public function store(Requests\CategoryRequest $request) {
        $input = $request->all();
        $category = $this->categoryModel->fill($input);
        $category->save();
        return redirect()->route('admincategories');
    }
    
    public function edit($id) {
        $category = $this->categoryModel->find($id);
        return view('admincategories.edit', compact('category'));
    }
    
    public function update(Requests\CategoryRequest $request, $id) {
        $this->categoryModel->find($id)->update($request->all());
        return redirect()->route('admincategories');
    }
    
    public function destroy($id) {
        $this->categoryModel->find($id)->delete();
        return redirect()->route('admincategories');
    }
}
