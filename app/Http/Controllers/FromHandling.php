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



       function addUser1(Request   $request){
        // echo "add user function called";
        // return $request; 
        print_r($request->skill) ;
        echo "<br/>";

        echo $request->gender;
        echo "<br/>";

        echo $request->country;
        echo "<br/>";

        echo $request->age;
        echo "<br/>";
    }


}
