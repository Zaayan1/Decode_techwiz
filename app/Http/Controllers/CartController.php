<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart(Request $request, $productId)
{
    // Get the authenticated user
    $user = Auth::user();

    // Find the product
    $product = Product::findOrFail($productId);

    // Create or update cart item
    $cartItem = Cart::updateOrCreate(
        ['user_id' => $user->id, 'product_id' => $product->id],
        ['quantity' => $request->input('quantity')]
    );

    return redirect()->route('products.index')->with('success', 'Product added to cart.');
}

public function viewCart()
{
    $user = Auth::user();
    $cartItems = $user->carts;
    return view('carts.index', compact('cartItems'));
}

public function removeFromCart($cartItemId)
{
    $cartItem = Cart::findOrFail($cartItemId);
    $cartItem->delete();

    return redirect()->route('carts.index')->with('success', 'Product removed from cart.');
}

public function checkout()
{
    // Logic to convert cart items to order and proceed with payment
}

public function cancelProducts(Request $request)
{
    $user = Auth::user();
    $productIds = $request->input('product_ids');

    // Find and delete cart items for selected products
    Cart::where('user_id', $user->id)->whereIn('product_id', $productIds)->delete();

    return redirect()->route('carts.index')->with('success', 'Selected products canceled.');
}


}
