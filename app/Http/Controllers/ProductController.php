<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products', compact('products'));
    }//
    public function create()
    {
        return view('add-product');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);

        $imagePath = $request->file('image')->store('product_images', 'public');

        Product::create([
            'name' => $validatedData['name'],
            'price' => $validatedData['price'],
            'image' => $imagePath,
        ]);

        
    }

}
