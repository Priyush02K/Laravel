<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;
class ProductController extends Controller
{
    public function index() {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create() {
        return view('products.create');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('uploads'), $imageName);

        Product::create([
            'name' => $request->name,
            'image' => $imageName
        ]);

        return redirect()->route('products.index')->with('success', 'Product Added');
    }
}

