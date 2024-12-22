<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


//https://laravel.com/docs/11.x/routing
//basic controller
Route::get('/', function () {
    return view('welcome');
});


Route::get("/", function () {
    return "halo Hadie apa kabar";
});

Route::get("/", function () {
    return view('landing-page');
});

Route::view('/', 'welcome');

// Route::get('/', [HomeController::class, 'index']);


// Route::get('/{id}', [HomeController::class, 'show']);
// Route::get('/{id}/about', [HomeController::class, 'about']);
// Route::get('/{id}/about/{name}', [HomeController::class, 'name']);

//grouping  routes
Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index');

    // Route::get('/{id}', 'show');
});

// Route::redirect('/home', '/');

// Route::prefix('admin')->group(function () {

//     Route::get('/', [AdminController::class, 'index']);
//     Route::get('/{id}', [AdminController::class, 'show']);
// });


Route::prefix('admin')->controller(AdminController::class)->group(function () {

    Route::get('/', 'index');
    Route::get('/{id}', 'show');
});
