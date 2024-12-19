<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/' , function (){
    return view("home");
})->name("home");
Route::get('/forum' , function (){
    return view("forum");
})->name("forum");

Route::get('/contact-us' , function (){
    return view("contact-us");
})->name("about");

Route::get('/blog' , function (){
    return view("blog");
})->name("blog");

use App\Http\Controllers\testController;

Route::get('/posts' ,[testController::class, 'index']);
Route::get('/posts/{var}' ,[testController::class, 'schow'])->name('table.schow');
Route::get('/create', function (){
    return "hy from create";
});
