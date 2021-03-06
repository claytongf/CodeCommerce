<?php

namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Http\Requests\ProductRequest;
use CodeCommerce\Tag;
use Illuminate\Http\Request;
use CodeCommerce\Category;
use CodeCommerce\Http\Requests;
use CodeCommerce\Http\Controllers\Controller;
use CodeCommerce\Product;
use CodeCommerce\ProductImage;
//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class AdminProductsController extends Controller {

    private $productModel;

    function __construct(Product $productModel) {
        $this->productModel = $productModel;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $products = $this->productModel->paginate(10);
        return view('admin/products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Category $category) {
        $categories = $category->lists('name', 'id');
        return view('admin/products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request) {
        $input = $request->all();
        $tagsIds = $this->getTagsIds($input['tags']);
        unset($input['tags']);
        $product = $this->productModel->fill($input);
        $product->save();
        $product->tags()->sync($tagsIds);
        return redirect()->route('admin/products');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Category $category) {
        $categories = $category->lists('name', 'id');
        $product = $this->productModel->find($id);
        return view('admin/products.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id) {
        $input = $request->all();
        $tagsIds = $this->getTagsIds($input['tags']);
        unset($input['tags']);
        $this->productModel->find($id)->tags()->sync($tagsIds);
        $this->productModel->find($id)->update($input);
        return redirect()->route('admin/products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $this->productModel->find($id)->delete();
        return redirect()->route('admin/products');
    }

    public function images($id) {
        $product = $this->productModel->find($id);
        return view('admin/products.images', compact('product'));
    }

    public function createImage($id) {
        $product = $this->productModel->find($id);
        return view('admin/products.create_image', compact('product'));
    }

    public function storeImage(Requests\ProductImageRequest $request, $id, ProductImage $productImage) {
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();

        $image = $productImage::create(['product_id' => $id, 'extension' => $extension]);
        Storage::disk('public_local')->put($image->id . '.' . $extension, File::get($file));
        return redirect()->route('admin/products.images', ['id' => $id]);
    }

    public function destroyImage(ProductImage $productImage, $id) {
        $image = $productImage->find($id);
        if (file_exists(public_path('uploads'). '/' . $image->id . '.' . $image->extension)):
            Storage::disk('public_local')->delete($image->id . '.' . $image->extension);
        endif;
        $product = $image->product;
        $image->delete();
        return redirect()->route('admin/products.images', ['id' => $product->id]);
    }

    private function getTagsIDs($tagList){
        $tags = explode(',',$tagList);
        $tagsIDs = [];
        foreach($tags as $tagName) {
            $tagName = trim($tagName);
            $tag = Tag::where('name', '=', $tagName)->first();
            if (!$tag && !empty($tagName)) {
                $tag = Tag::create(['name' => $tagName]);
            }
            if(!in_array($tag->id, $tagsIDs)) {
                $tagsIDs[] = $tag->id;
            }
        }
        return $tagsIDs;
    }

}
