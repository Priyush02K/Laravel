<?php

namespace App\Http\Controllers;

use App\Models\APIProduct;
use Illuminate\Http\Request;

class APIProductController extends Controller
{
    //
     public function index()
    {
        return response()->json(APIProduct::all());
    }

        // Search product by name
    public function search($name)
    {
        $products = APIProduct::where('name', 'like', '%' . $name . '%')->get(['id', 'name', 'price', 'quantity']);

        if ($products->isEmpty()) {
            return response()->json([
                'message' => "No products found matching: $name"
            ], 404);
        }

        return response()->json($products);
    }


    //store
    public function store(Request $request)
    {
        // Validate data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'quantity' => 'required|integer'
        ]);

        // Insert into database
        $product = APIProduct::create($validated);

        return response()->json([
            'message' => 'Product created successfully!',
            'data' => $product
        ], 201);
    }

    //update
    public function update(Request $request, $id)
{
    // Validate data
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'price' => 'required|numeric',
        'quantity' => 'required|integer'
    ]);

    // Find product
    $product = APIProduct::find($id);

    if (!$product) {
        return response()->json(['message' => 'Product not found'], 404);
    }

    // Update product
    $product->update($validated);

    return response()->json([
        'message' => 'Product updated successfully!',
        'data' => $product
    ]);
}


//delete
public function destroy($id)
{
    // Find product by ID
    $product = APIProduct::find($id);

    if (!$product) {
        return response()->json(['message' => 'Product not found'], 404);
    }

    // Delete product
    $product->delete();

    return response()->json(['message' => 'Product deleted successfully!']);
}

public function apisearch($key)
{
    $products = APIProduct::where('name', 'like', "%$key%")
        ->orWhere('description', 'like', "%$key%")
        ->get();

    if ($products->isEmpty()) {
        return response()->json(['message' => 'No products found'], 404);
    }

    return response()->json($products);
}









}
