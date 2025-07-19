<?php

namespace App\Http\Controllers;
use App\Models\NewStudent;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class NewStudentController extends Controller
{
    //
        public function index()
    {
        $students = NewStudent::all(); // Eloquent
        return view('students.index', compact('students'));
    }

     public function create()
    {
        // Insert using Eloquent
        NewStudent::create([
            'name' => 'Sanjiv',
            'email' => 'sanjiv12@example.com'
        ]);

        return 'Student Created';
    }

    public function queryBuilderDemo()
    {
        $students = DB::table('newstudents')->get(); // Query Builder
        return view('students.index', ['students' => $students]);
    }

}
