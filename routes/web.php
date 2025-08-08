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
use App\Http\Controllers\RequestExampleController;
use App\Http\Controllers\SessionDemoController;
use App\Http\Controllers\FlashController;
use App\Http\Controllers\ImageController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\EmployeeController;

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;

use App\Models\Student;
use App\Http\Controllers\RelationController;



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


//HTTP request Method
Route::get('/request-example', [RequestExampleController::class, 'showForm']);
Route::post('/request-example', [RequestExampleController::class, 'handleRequest']);


//session 
Route::get('/session-demo', [SessionDemoController::class, 'index']);
Route::get('/session/set', [SessionDemoController::class, 'set']);
Route::get('/session/get', [SessionDemoController::class, 'get']);
Route::get('/session/remove', [SessionDemoController::class, 'remove']);
Route::get('/session/clear', [SessionDemoController::class, 'clear']);

//flash-session

Route::get('/flash-form', [FlashController::class, 'showForm']);
Route::post('/flash-form', [FlashController::class, 'handleForm']);


//upload and display Image

Route::get('/upload-image', [ImageController::class, 'create']);
Route::post('/upload-image', [ImageController::class, 'store']);
Route::get('/images/{filename}', [ImageController::class, 'show'])->name('images.show');


//Localization in Laravel 
Route::get('lang/{locale}', function ($locale) {
    Session::put('locale', $locale);
    return redirect()->back();
}); 



//CRUD OPERATION
Route::resource('employees', EmployeeController::class);


//pagination

Route::get('/customers', [CustomerController::class, 'index'])->name('customers.index');

//upload img database

Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');


//component reusable

Route::get('homeNew', function () {
    return view('homeNew');
});



Route::get('/Inheritance', function () {
    return view('pages.home');
});


//accessor
Route::get('/accessor-test', function () {
    // Insert a student (run only once)
    // Student::create(['name' => 'priyush']);

    $student = Student::first();

    return "Student Name (with accessor): " . $student->name;
    });

    //mutator
    Route::get('/mutator-test', function () {
    // Create new student
    // Student::create(['name' => 'pRIYUSH khOBRAGADE']);

    // Get latest student
    $student = Student::latest()->first();

    return "Stored Student Name (Mutated): " . $student->name;
});



//RelationsShip Database


Route::get('/one-to-one', [RelationController::class, 'oneToOne']);
Route::get('/one-to-many', [RelationController::class, 'oneToMany']);
Route::get('/many-to-many', [RelationController::class, 'manyToMany']);
Route::get('/has-many-through', [RelationController::class, 'hasManyThrough']);
Route::get('/polymorphic', [RelationController::class, 'polymorphic']);



