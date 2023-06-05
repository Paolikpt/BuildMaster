<?php

use App\Http\Controllers\ProjetController;
use App\Http\Controllers\UserController;
use App\Models\Project;
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



Route::get('/login', function () {
    return view('auth.login');
});


Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/services', function () {
    return view('services');
});



Route::post('/register', [UserController::class, 'register']);


Route::post('/login', [UserController::class, 'login']);


Route::get('/logout', [UserController::class, 'logout']);



Route::get('/about', function () {
    return view('about');
});



Route::get('/ourprojects', function () {
    return view('services');
});


Route::get('/contact', function () {
    return view('contact');
});

















// Route::get('/modifierProjet/{id}', [ProjetController::class, 'getUserById'])->name('des.ff');



//routes clients 
//toutes les routes du client

Route::get('/user/taches', function () {
    return view('user.taches');
})->middleware("user");

Route::get('/user/parametre', function () {
    return view('user.parametres');
})->middleware("user");


// Route::get('/user/parametre', [ProjetController::class, 'getParametres'])->middleware("user");

Route::get('/user/projects', function () {
    return view('user.projects');
})->middleware("user");


Route::post('/user/projects', [ProjetController::class, 'create']);

Route::get('/user/projects/{id}', [ProjetController::class, 'getUserById'])->middleware("user");

Route::get('/user/projects', [ProjetController::class, 'index'])->middleware("user")->name('projects.index');

Route::delete('/user/projets/{id}', [ProjetController::class, 'delete'])->name('projects.destroy')->middleware('user');

Route::put('/user/projects/{id}', [ProjetController::class, 'update'])->name('projects.update')->middleware('user');

Route::get('/user/dashboard', [ProjetController::class, 'getDashboard'])->middleware("user")->name('dashboard.index');





// manager routes
// toutes les routes du manager
Route::middleware('manager')->prefix('manager')->group(function () {


    Route::get('/dashboard', [ProjetController::class, 'getManagerDashboard'])->name('dashboard.index');


    
    Route::get('/projects', function () {
        return view('manager.projects');
    });

    Route::get('/parametre', function () {
        return view('manager.parametres');
    });

    Route::get('/equipe', function () {
        return view('manager.equipe');
    });

  /*
      Route::get('/communication', function () {
        return view('manager.communication');
    });
   */

    Route::get('/utilisateur', function () {
        return view('manager.utilisateur');
    });

    Route::get('/taches', function () {
        return view('manager.taches');
    });

    Route::get('/projects/manage/{id}', [ProjetController::class, 'getProjectByIdForAddTask']);





    Route::post('/projects/{id}/tasks/add', [ProjetController::class, 'addTaskToProject']);

});

