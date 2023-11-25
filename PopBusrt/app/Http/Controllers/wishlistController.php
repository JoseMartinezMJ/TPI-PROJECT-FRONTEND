<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use Illuminate\Http\Request;

class wishlistController extends Controller
{
    public function createWishlist()
    {
        return view('crear_wishlist');
    }

    public function getUserWishlist($userId)
    {
        $wishlist = Wishlist::where('user_id', $userId)->first();

        return response()->json($wishlist);
    }
    
}