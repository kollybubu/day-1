<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\articlecontroller;
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

Route::get('/', function () {
    return view('welcome');
});


//static Route

Route::get('/blog', function(){
    return "Hello, this is Blog Page";
});

//dynamuc Routee
Route::get('/blogs/{id}', function($id){
    return "Heloo, this is blog detail - $id";
});


//Rout name 
Route::get('/dashboard', function(){
    return "welcome From TPP Program Dashboard";
})->name("dashboard.tpp");

Route::get('/tpp', function(){
    return redirect()->route('dashboard.tpp');
});

//gruop route

Route::prefix('dashboard')->group(function(){
    Route::get('/admin', function(){
        return "this is admin dashboard!";
    });
    Route::get('/users', function(){
        return "this is user dashboard!";
    });
});

//laravel view
// Route::get('/', function(){
//     return view('index');
// });
// Route::get('/students', [StudentController::class, 'index']);


Route::get('/', function(){
    return view('index');
});
Route::get('/article', [articlecontroller::class, 'index']);