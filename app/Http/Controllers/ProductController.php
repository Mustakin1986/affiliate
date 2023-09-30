<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::get();
        return view('backend.product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::get();
        $brand = Brand::get();
         return view('backend.product.Create',compact('categories','brand'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        {
            if($request->file('photo')){
                $name = time().'.'.$request->photo->extension();
                $request->photo->move(public_path('/backend/product/'), $name);
             }

            $product = new Product();
            $product->title = $request->title;
            $product->slug = str_replace(' ','_',strtolower($request->title));
            $product->summary = $request->summary;
            $product->description = $request->description;
            $product->size = $request->size;
            $product->brand_id = $request->brand_id;
            $product->cat_id = $request->cat_id;
            $product->stock = $request->stock;
            $product->price = $request->price;
            $product->offer_price = $request->offer_price;
            $product->discount = $request->discount;
            $product->size = $request->size;
            $product->status = $request->status;
            $product->condition = $request->condition;
            $product->photo = $name;
            $product->save();
            return redirect()->back()->with('success','Product has been created');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
