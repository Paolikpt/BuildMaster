<?php

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

Route::get('/', function () {
    return view('index');
});

Route::get('/test', function () {
    return view('welcome');
});

Route::get('/t', function () {
    return view('test');
});

Route::get('/login', function () {
    return view('auth.login');
});


Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('dashboard', function () {
    return view('user.dashboard');
})->middleware("user");


Route::post('/register', [UserController::class, 'register']);


Route::post('/login', [UserController::class, 'login']);


Route::get('/logout', [UserController::class, 'logout']);


Route::get('/about', function () {
    return view('about');
});

Route::get('/projects', function () {
    return view('user.projects');
});


