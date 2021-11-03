<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category as ModelsCategory;
use App\Models\Product as ModelsProduct;
use App\Models\ProductGallery;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = ModelsCategory::take(6)->get();
        $products = ModelsProduct::with('galleries')->take(8)->get();
        // $productGallery = ProductGallery::take(8)->get();

        return view('pages.home',[
            'categories' => $categories,
            'products' => $products,
            // 'productGallery' => $productGallery,
        ]);
    }
}