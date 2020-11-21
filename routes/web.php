<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\MenuController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('/');

// Auth::routes();

// Route::get('all', [\App\Http\Controllers\PostController::class, 'index']);
// Route::get('posts/{post}', [\App\Http\Controllers\PostController::class, 'show']);

Route::get('/menu', [MenuController::class, 'index'])->name('name');


Route::get('/users', function(Request $request) {
    // if ( $request->input('client') ) {
    //     return Project::select('id', 'deadline', 'budget', 'status')->get();
    // }

    // $columns = ['deadline', 'budget', 'status'];

    // $length = $request->input('length');
    // $column = $request->input('column'); //Index
    // $dir = $request->input('dir');
    // $searchValue = $request->input('search');

    // $query = Project::select('id', 'deadline', 'budget', 'status')->orderBy($columns[$column], $dir);

    // if ($searchValue) {
    //     $query->where(function($query) use ($searchValue) {
    //         $query->where('budget', 'like', '%' . $searchValue . '%')
    //         ->orWhere('status', 'like', '%' . $searchValue . '%');
    //     });
    // }

    // $projects = $query->paginate($length);
    // return ['data' => $projects, 'draw' => $request->input('draw')];

    if ( $request->input('client') ) {
        return User::select('id', 'email', 'name')->get();
    }

    $columns = ['id', 'email', 'name'];
    $length = $request->input('length');
    $column = $request->input('column'); //Index
    $dir = $request->input('dir');
    $searchValue = $request->input('search');

    $query = User::select('id', 'name', 'email')->orderBy($columns[$column], $dir);

    if ($searchValue) {
        $query->where(function($query) use ($searchValue) {
            $query->where('name', 'like', '%' . $searchValue . '%')
            ->orWhere('email', 'like', '%' . $searchValue . '%');
        });
    }

    $users = $query->paginate($length);
    return ['data' => $users, 'draw' => $request->input('draw')];


    // return Inertia::render('Users/Index', ['users' => $users, 'draw' => $request->input('draw')]);
})->name('users.index');


Route::get('/datatable', function(){
    return Inertia::render('datatable');
});

