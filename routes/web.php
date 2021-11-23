<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

    // default Route
    Route::get('/', HomeController::class);

    // Contact
    Route::get('/contact', [ContactController::class, 'create']);
    // Membuat Route jika controller mempunyai form action seperti CRUD
    // Maka menggunakan Route::post
    Route::post('/contact', [ContactController::class, 'store']);

    // About
    Route::get('/about', [AboutController::class, 'index']);

    // Blog
    Route::get('/blog/{identifier}', BlogController::class);

    //User
    Route::get('/user', [UserController::class, 'index'])->middleware('auth');
    Route::get('/user/{user:username}', [UserController::class, 'show'])->name('user.show');

    // Membuat Middleware
    //Jika user belum login dan register maka route ini bisa diakses. jika sudah login maka route ini tidak bisa diakses lagi
    Route::middleware('guest')->group(function () {
        //Register
        Route::get('/register', [RegisterController::class, 'index'])->name('register');// Route Untuk link
        Route::post('/register', [RegisterController::class, 'store'])->name('register.store');// Route untuk Form

        //Login
        Route::get('/login', [LoginController::class, 'index'])->name('login'); // Route Untuk link
        Route::post('/login', [LoginController::class, 'store'])->name('login.store');// Route untuk Form
    });


    Route::middleware('auth')->group(function () {
        // Route Ini bisa diakses jika user sudah login, karena route ini menggunakan Middleware(auth)
        // Task
        // Membuat Route Resource supaya routing kita lebih singkat
        Route::resource('task', TaskController::class)->middleware('auth');

        //Route Logout
        Route::post('/logout', LogoutController::class)->name('logout');

    });




    //Contoh Route Task sebelum menggunakan Route Resource
        // Route::get('/task', [TaskController::class, 'index']);
        // Route::post('/task/create', [TaskController::class, 'store']);
    // Melakukan update dengan mengabil id melalui url {id} (widlcard)
        // Route::get('/task/{id}/edit', [TaskController::class, 'edit']);
    // Put biasa nya digunkan untuk update
        // Route::put('/task/{id}', [TaskController::class, 'update']);
    // Melakukan Delete
        // Route::delete('/task/{id}', [TaskController::class, 'delete']);


