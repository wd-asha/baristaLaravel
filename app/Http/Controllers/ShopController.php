<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Carbon;

class ShopController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $products = Product::all();
        return view('shop', compact('categories', 'products'));
    }

    public function product($id)
    {
        $categories = Category::all();
        $product = Product::find($id);
        /*$wishlists = Wishlist::all();*/
        return view('product', compact('categories', 'product'/*, 'wishlists'*/));
    }
}
