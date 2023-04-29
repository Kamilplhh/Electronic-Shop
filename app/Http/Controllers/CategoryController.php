<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function GetCategories() {

        $categories = Category::All();
        
        return view('category', compact(['categories']));
    }
    
    public function GetSelected($id) {

        $categories = Category::All();
        $products = Product::where('category_id', $id)->get();
        
        return view('categories', compact(['categories', 'products']));
    }
    
}
