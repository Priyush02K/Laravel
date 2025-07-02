<?php

use Illuminate\Support\Facades\Route;
use PhpParser\Builder\Use_;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FromHandling;



Route::get('/', function () {
    return view('welcome');
});


//1st way to add route
Route::get('/home', function () {
    return view('home');
});


//2nd way 
Route::view('/home','home');

Route::get('/about/{name}', function ($name) {
    echo $name;
    return view('about');
});


//calling controller
Route::get('/user', [UserController::class, 'getUser']);



Route::get('/username/{name}', [UserController::class, 'getUserName']);


//blade template calling
Route::get('/', [UserController::class, 'show']);


Route::get('/', [HomeController::class, 'Opration']);



//from handling
Route::view('user-from','user-from');
Route::post('addUser',[FromHandling::class, 'addUser']);


Route::view('user-from-two','user-from-two');
Route::post('addUser1',[FromHandling::class, 'addUser1']);  // first for action ="" second for controller function name
