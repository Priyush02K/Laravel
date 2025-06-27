<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function Opration()
    {
        $name="priyush";
        $age = 20;
        $users = ['Alice', 'Bob', 'Charlie'];
        $role = 'admin';

        return view('welcome', compact('name','age', 'users', 'role'));
    }
}
