<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function getStudent()
    {
       $student= \App\Models\Student::all();
       return $student;
    }
}
