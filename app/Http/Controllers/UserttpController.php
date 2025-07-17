<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;

class UserttpController extends Controller
{
    //
    function getuser(){
        $response= Http::get("https://jsonplaceholder.typicode.com/users/1");

        $response=$response->body();

        return view('userhttp',['data'=>json_decode($response)]);


    }
    
}
