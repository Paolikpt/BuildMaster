<?php

use App\Http\Controllers\ProjetController;
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

Route::get('admin_dashboard', function () {
    return view('admin.dashboard');
})->middleware("user");


Route::post('/register', [UserController::class, 'register']);


Route::post('/login', [UserController::class, 'login']);


Route::get('/logout', [UserController::class, 'logout']);

Route::post('/projects', [ProjetController::class, 'create']);


Route::get('/about', function () {
    return view('about');
});

Route::get('/projects', function () {
    return view('user.projects');
})->middleware("user");

Route::get('/ourprojects', function () {
    return view('services');
});


Route::get('/contact', function () {
    return view('contact');
});




Route::get('/dashboard', [ProjetController::class, 'getDashboard'])->middleware("user");







Route::get('/utilisateur', function () {
    return view('admin.utilisateur');
})->middleware("user");


Route::get('/taches', function () {
    return view('admin.taches');
})->middleware("user");


Route::get('/projects', function () {
    return view('admin.projects');
});



Route::get('/parametre', function () {
    return view('admin.parametres');
})->middleware("user");



Route::get('/equipe', function () {
    return view('admin.equipe');
})->middleware("user");


Route::get('/communication', function () {
    return view('admin.communication');
})->middleware("user");


Route::get('/communication', function () {
    return view('user.projects');
})->middleware("user");


Route::get('/user_taches', function () {
    return view('user.taches');
})->middleware("user");

Route::get('/user_parametre', function () {
    return view('user.parametres');
})->middleware("user");



Route::get('/user_projects', [ProjetController::class, 'index'])->middleware("user");

Route::delete('/projets/{id}', [ProjetController::class, 'destroy'])->name('projects.destroy');