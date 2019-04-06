<?php

namespace App\Http\Controllers\Web\Products;

use App\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Category;
use Carbon\Carbon;

class ProductsController extends Controller
{
    /**
     * Show product page
     *
     * @return response
     */
    public function index($lang, $permalink) {
      $product = Product::where('permalink', $permalink)->with('images')->first();

      if ($product) {
        $product->full_image = asset('public/uploads/thumbs2/' . $product->image);
        $product->image = asset('public/uploads/thumbs/' . $product->image);
        $product->month = Carbon::parse($product->created_at)->format('M');
        $product->day = Carbon::parse($product->created_at)->day;
        foreach ($product->images as $image) {
          $image->full_image = asset('public/uploads/' . $image->image);
          $image->image = asset('public/uploads/thumbs/' . $image->image);
        }
//dd($product->images);
       // $categories = Category::withCount('products')->get();

//        $related_products = Product::where('category_id', $product->category_id)->where('id', '!=', $product->id)->limit(5)->inRandomOrder()->get();
//        foreach ($related_products as $p) {
//          $p->image = asset('public/uploads/thumbs/' . $p->image);
//          $p->en_name = clean_limit($p->en_name, 10);
//          $p->en_name = clean_limit($p->en_name, 10);
//          $p->en_details = clean_limit($p->en_details, 30);
//          $p->ar_details = clean_limit($p->ar_details, 30);
//        }
      }

      return $product ? view('web.products.product', compact('product', 'categories')) : view('web.errors.notfound');
    }

    public function Products($lang){
        $products = Product::orderBy('id','desc')->paginate(8);
        $setting=Setting::first();
        foreach ($products as $product) {
            $product->image = asset('public/uploads/thumbs2/' . $product->image);
            $product->en_name = clean_limit($product->en_name, 25);
            $product->en_name = clean_limit($product->en_name, 25);
            $product->en_details = clean_limit($product->en_details, 220);
            $product->en_details = clean_limit($product->en_details, 220);
        }

        return view('web.products.products',compact('products','setting'));

    }
}
