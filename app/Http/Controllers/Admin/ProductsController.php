<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Category;
use App\Http\Requests\Admin\ProductRequest;

class ProductsController extends Controller
{
  /**
   * Show all products
   *
   * @return response
   */
  public function index(Product $product) {
     $products = $product->orderBy('id', 'asc')->get();
     foreach ($products as $product) {
       $product->en_details = clean_limit($product->en_details);
       $product->image = asset('public/uploads/thumbs/' . $product->image);
     }
     return view('admin.products.index', compact('products'));
  }

  /**
   * Create new product
   *
   * @return response
   */
  public function create() {
    $categories = Category::all();

    return view('admin.products.create', compact('categories'));
  }

  /**
   * Store new product
   *
   * @return response
   */
  public function store(ProductRequest $request) {
    request()->validate([
     'image' => 'required|image|max:5000',
     'permalink' => 'required|string|unique:products',
    ]);

    $request->image = uploadImage2($request->image,360,360);

    $product = Product::create($request->all());
    $product->image = $request->image;
    $product->save();

    return redirect()->back()->with(['success' => 'Product inserted successfully']);
  }

  /**
   * edit existing product
   *
   * @return response
   */
  public function edit($id) {
    $categories = Category::all();
    $product = Product::where('id', $id)->first();
    if (! $product) {
      return redirect()->back()->with(['error' => 'Data Not Found']);
    }
    $product->image = asset('public/uploads/thumbs/' . $product->image);

    return view('admin.products.edit', compact('product', 'categories'));
  }

  /**
   * update existing product
   *
   * @return response
   */
  public function update($id, ProductRequest $request) {
    $product = Product::where(['id' => $id])->first();

    if (! $product) {
      return redirect()->back()->with(['error' => 'Sorry, An error occurs']);
    }

    request()->validate([
      'permalink' => 'required|string|unique:products,permalink,'.$id,
    ]);

    $product = $product->fill($request->except('image'));
     if($request->hasFile('image')) {
         $product->image = uploadImage2($request->image,360,360);
     }
    $product->save();

   return redirect()->back()->with(['success' => 'product updated successfully']);
  }

  /**
   * Delete product by the given id
   *
   * @return message
   */
  public function destroy($id) {
    $product = Product::where(['id' => $id])->first();

    if (! $product) {
      return redirect()->back()->with(['error' => 'Data Not Found']);
    }
    Product::destroy($id);
    return redirect()->back()->with(['success' => 'Product deleted successfully']);
  }
}
