<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\UsersController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])
    ->name('dashboard.index')
    ->middleware('auth');

// Auth
Route::get('login', [LoginController::class, 'showLoginForm'])
    ->name('login')
    ->middleware('guest');

Route::post('login', [LoginController::class, 'login'])
    ->name('login.attempt')
    ->middleware('guest');

Route::post('logout', [LoginController::class, 'logout'])
    ->name('logout');


// others
Route::get('/blog', function() {
    return Inertia::render('Blogs/Index', []);
});

Route::get('/issues', function() {
    return Inertia::render('Issue', [
        //
    ]);
});

Route::get('/dashboard3', function() {
    return Inertia::render('Dashboard3', []);
});

Route::get('/app-layout-2', function() {
    return Inertia::render('LayoutTwo', [
        //
    ]
  );
});

Route::get('admin/dashboard', function () {
    return Redirect::route('/')->with('success', 'This is Dashboard');
});

// Auth::routes();
// Route::get('all', [\App\Http\Controllers\PostController::class, 'index']);
// Route::get('posts/{post}', [\App\Http\Controllers\PostController::class, 'show']);

Route::get('/users', [UsersController::class, 'index'])->name('users.index');
Route::get('/allusers', [UsersController::class, 'allUsers'])->name('users.all');


//API
Route::get('/api/users', [UsersController::class, 'getUserData']);


