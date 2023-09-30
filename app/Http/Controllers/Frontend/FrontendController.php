<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Brand;
use App\Models\Slider;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    public function home()
    {
        $categories = Category::get();
        $sliders = Slider::get();
        $all_product = Product::get();
        $all_vendor = Brand::get();
        return view('frontend.layouts.master',compact('categories','sliders','all_product','all_vendor'));
    }
}
