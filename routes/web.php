<?php

use App\Http\Controllers\NavController;
use App\Http\Controllers\PostController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [NavController::class,'Home'])->name("home");
Route::get('/about', [NavController::class,'About'])->name("about");
Route::get('/contact', [NavController::class,'Contact'])->name("contact");

Route::post('/daftar', [NavController::class,'daftar'])->name("proses_daftar");


Route::get('/post', [PostController::class,'post'])->name("post");
Route::resource('post', PostController::class);