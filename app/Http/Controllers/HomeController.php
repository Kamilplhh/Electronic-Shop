<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\event;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function GetData() {
        
        $categories = Category::All();
        $products = Product::take(20)->get();
        $sliders = Event::All();
        
        return view('home', compact(['categories', 'products', 'sliders']));
    }
   
    public function cart() {

        $categories = Category::All();

        return view('cart', compact('categories'));
    }

    public function profile() {

        $categories = Category::All();
        
        return view('profile', compact(['categories']));
    }

    public function addToCart($id) {

        $product = Product::findOrFail($id);
 
        $cart = session()->get('cart', []);
 
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        }  else {
            $cart[$id] = [
                "product_name" => $product->name,
                "photo" => $product->src,
                "price" => $product->price,
                "quantity" => 1
            ];
        }
 
        session()->put('cart', $cart);
        return redirect()->back();
    }
 
    public function remove(Request $request) {

        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            return redirect()->back();
        }
    }
}

