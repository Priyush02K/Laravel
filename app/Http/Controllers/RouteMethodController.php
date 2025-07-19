<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// app/Http/Controllers/RouteMethodController.php


class RouteMethodController extends Controller
{
    public function index()
    {
        return view('route_methods');
    }

    public function getMethod()
    {
        return "GET Method Triggered!";
    }

    public function postMethod(Request $request)
    {
        return "POST Method Triggered with data: " . json_encode($request->all());
    }

    public function putMethod(Request $request)
    {
        return "PUT Method Triggered with data: " . json_encode($request->all());
    }

    public function patchMethod(Request $request)
    {
        return "PATCH Method Triggered with data: " . json_encode($request->all());
    }

    public function deleteMethod(Request $request)
    {
        return "DELETE Method Triggered!";
    }

    public function matchMethod(Request $request)
    {
        return "MATCH (GET/POST) Method Triggered!";
    }

    public function anyMethod(Request $request)
    {
        return "ANY Method Triggered via: " . $request->method();
    }
}
