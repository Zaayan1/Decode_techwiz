<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminCartController extends Controller
{
    public function viewUserCarts()
{
    $cartItems = Cart::with('user', 'product')->get();
    return view('admin.carts.index', compact('cartItems'));
}

}
