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
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserttpController;
use App\Http\Controllers\NewStudentController;
use App\Http\Controllers\RouteMethodController;






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


Route::view('user-from-three','user-from-three');
Route::post('addUser3',[FromHandling::class, 'addUser3']); 


Route::get('/uppercase-form', [FromHandling::class, 'showForm']);
Route::post('/submit-uppercase', [FromHandling::class, 'handleForm']);


//name route 

Route::view('user-from','user-from')->name('ur');



Route::get('/user/{id}', [UserController::class, 'show'])->name('user.profile');


//groping router
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/settings', [AdminController::class, 'settings'])->name('admin.settings');
});


//groping controller
// Route::get('index',[UserController::class, 'index']);
// Route::get('add',[UserController::class, 'add']);
// Route::get('delete',[UserController::class, 'delete']);

Route::controller(UserController::class)->group(function(){
    Route::get('index', 'index');
    Route::get('add', 'add');
    Route::get('settings', 'settings');
    Route::get('about/{name}', 'about');

});


// Route::get('/admin/dashboard', function () {
//     return view('admin.dashboard');
// })->middleware('admin');

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware('admin');

Route::get('/office', function () {
    return '🏢 Welcome to the office!';
})->middleware('business.hours');


//mysql
Route::get('mysql-conn', [UserController::class ,'database']);
Route::get('/database', action: [UserController::class, 'database']);

// Route::get('/database', action: [StudentController::class, 'getStudent']);

//htpp API
Route::get('userhttp', [UserttpController::class,'getuser']);


//Eloquent Model
Route::get('/students', [NewStudentController::class, 'index']);
Route::get('/add-student', [NewStudentController::class, 'create']);
Route::get('/query-builder', [NewStudentController::class, 'queryBuilderDemo']);

//Route Method
Route::get('/route-test', [RouteMethodController::class, 'index']);

Route::get('/route/get', [RouteMethodController::class, 'getMethod']);
Route::post('/route/post', [RouteMethodController::class, 'postMethod']);
Route::put('/route/put', [RouteMethodController::class, 'putMethod']);
Route::patch('/route/patch', [RouteMethodController::class, 'patchMethod']);
Route::delete('/route/delete', [RouteMethodController::class, 'deleteMethod']);
Route::match(['get', 'post'], '/route/match', [RouteMethodController::class, 'matchMethod']);
Route::any('/route/any', [RouteMethodController::class, 'anyMethod']);