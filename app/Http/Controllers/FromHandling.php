<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FromHandling extends Controller
{
    //
    function addUser(Request   $request){
        // echo "add user function called";
        // return $request; 
        echo $request->name;
        echo "<br/>";

        echo $request->email;
        echo "<br/>";

        echo $request->city;
        echo "<br/>";
    }
}
