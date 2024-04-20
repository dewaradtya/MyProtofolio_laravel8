<?php

use App\Http\Controllers\NavController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProjekController;
use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [NavController::class,'Home'])->name("home");
Route::get('/about', [NavController::class,'About'])->name("about");
Route::get('/contact', [NavController::class,'Contact'])->name("contact");

Route::post('/daftar', [NavController::class,'daftar'])->name("proses_daftar");
 

Route::get('/post/index', [PostController::class,'index'])->name("post/index");
Route::resource('contacts', PostController::class);

Route::get('/signIn/login', [UserController::class, "login"])->name('signIn/login');
Route::post('/doLogin', [UserController::class, "doLogin"])->name('doLogin');
Route::post('/doLogout', [UserController::class, "doLogout"])->name('doLogout');

Route::get("/sample", [UserController::class, "createSample"])->name('createSample');

Route::get('/signIn/register', [UserController::class, "register"])->name('signIn/register');
Route::post('/do-register', [UserController::class, "doRegister"])->name('doRegister');

Route::resource("projek", ProjekController::class);