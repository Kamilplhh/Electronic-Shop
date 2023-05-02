<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\wishlist;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    public function AddObject($id) {

      wishlist::create([
        'user_id' => Auth::id(),
        'product_id' => $id,  
      ]);

      return redirect()->back();
    }

    public function DeleteObject($id) {

      wishlist::where('id', $id)->delete();

      return redirect()->back();   
    }

    
}
