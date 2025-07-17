<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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


    public function index()
    {
        return "User index";
    }

       public function add()
    {
        return "User add";
    }

    public function settings()
    {
        return "User settings";
    }

       public function about($name)
    {
        return $name;
    }

    public function database()
    {
        $user = DB::select('select * from users');
        $student = DB::select('select * from student');

        return view('database',['users'=> $user]);
    }
}
