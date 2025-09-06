<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\APIEmployee;

class APIEmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
                        return response()->json(APIEmployee::all(), 200);

    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $employee = APIEmployee::find($id);
        if (!$employee) {
            return response()->json(['message' => 'Employee not found'], 404);
        }
        return response()->json($employee, 200);
        

    }

       // Store new employee
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|unique:employees',
            'position' => 'required|string',
            'salary' => 'required|numeric',
        ]);

        $employee = APIEmployee::create($data);
        return response()->json($employee, 201);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $employee = APIEmployee::find($id);
        if (!$employee) {
            return response()->json(['message' => 'Employee not found'], 404);
        }

        $employee->update($request->all());
        return response()->json($employee, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //

         $employee = APIEmployee::find($id);
        if (!$employee) {
            return response()->json(['message' => 'Employee not found'], 404);
        }

        $employee->delete();
        return response()->json(['message' => 'Employee deleted'], 200);
    }
}
