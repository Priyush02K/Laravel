<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\Uppercase;


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


           function addUser3(Request   $request){
        // echo "add user function called";
            $request->validate([
                'name' => 'required|string|max:50',
                'email' => 'required|email|max:100',
                'city' => 'required',
                'skill' => 'required',
                'city' => 'required',
                'gender' => 'required',
                'country' => 'required',

            ]);
            
            return $request;

    }


    public function showForm()
    {
        return view('uppercaseForm');
    }

      public function handleForm(Request $request)
    {
        $request->validate([
            'name' => ['required', new Uppercase()],
        ]);

        return back()->with('success', 'Validation passed! Name is uppercase.');
    }


}
