<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function getUser(){
        // return "We calling UserController";
        return view ('user');
    }


    //function with argument
    
    function getUserName($name){
        return "Hello this is"    ." ". $name;
    }



    //for blade 
        // public function show()
        // {
        //     $name = 'John';
        //     return view('welcome', compact('name'));
        // }



    public function show($id)
    {
        return view('user', ['id' => $id]);
    }


}
