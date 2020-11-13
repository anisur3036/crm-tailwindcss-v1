<?php

use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;

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
    return auth()->user()->name;
});

Route::get('/', function () {
    return Inertia::render('Welcome', [
    	'name' => 'Welcome to Laravel InertiaVue and Tailwindcss',
    ]
  );
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('all', [\App\Http\Controllers\PostController::class, 'index']);
Route::get('posts/{post}', [\App\Http\Controllers\PostController::class, 'show']);
