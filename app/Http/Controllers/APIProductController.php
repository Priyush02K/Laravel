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

}
