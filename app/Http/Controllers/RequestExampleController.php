<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestExampleController extends Controller
{

    public function showForm()
    {
        return view('request_example');
    }

    public function handleRequest(Request $request)
    {
        $all = $request->all();                    // Get all input
        $name = $request->input('name');           // Get specific input
        $hasEmail = $request->has('email');        // Check if input exists
        $method = $request->method();              // Get request method
        $isPost = $request->isMethod('post');      // Check request method
        $path = $request->path();                  // Get request URI path
        $url = $request->url();                    // Get full URL
        $fullUrl = $request->fullUrl();            // Full URL with query
        $ip = $request->ip();                      // Client IP
        $query = $request->query('q', 'none');     // Get query parameter

        return view('request_example', compact(
            'all', 'name', 'hasEmail', 'method', 'isPost', 'path', 'url', 'fullUrl', 'ip', 'query'
        ));
    }
}