<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Fetch all products
    public function index()
    {
        // Get all products and return them as a JSON response
        return response()->json(Product::all());
    }

    // Store a new product
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validated = $request->validate([
            'Nama_Produk' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'Harga' => 'required|numeric',
            'Image_Path' => 'nullable|string',
        ]);

        // Create and store the product
        $product = Product::create($validated);

        // Return the created product as a JSON response
        return response()->json($product, 201);
    }
}
