<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


use App\Http\Controllers\API\APIEmployeeController;

Route::apiResource('employees', APIEmployeeController::class);


Route::post('/register', function (Request $request) {
    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
    ]);

    $token = $user->createToken('API Token')->plainTextToken;

    return response()->json(['token' => $token], 201);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//
use App\Http\Controllers\APIProductController;

Route::get('/apiproducts', [APIProductController::class, 'index']);

Route::get('/apiproducts/search/{name}', [APIProductController::class, 'search']);


//POST
Route::post('/apiproducts', [APIProductController::class, 'store']);


//update
Route::post('/apiproducts/update/{id}', [APIProductController::class, 'update']);

//delete
Route::delete('/apiproducts/{id}', [APIProductController::class, 'destroy']);


//search 
Route::get('/apiproducts/search/{key}', [APIProductController::class, 'apisearch']);

use App\Http\Controllers\AuthController;

Route::post('/signup', [AuthController::class, 'signup']);
Route::post('/login', [AuthController::class, 'login']);
