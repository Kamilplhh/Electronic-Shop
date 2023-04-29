<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function GetItem($id) {
        
        $categories = Category::All();
        $products = Product::where('id', $id)->get();

        return view('product', compact(['categories', 'products']));
    }
}
