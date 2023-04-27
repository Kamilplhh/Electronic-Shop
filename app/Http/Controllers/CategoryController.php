<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function GetCategory() {
        
        $categories = Category::All();
        
        return view('home', compact('categories'));
    }
}
