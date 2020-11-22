<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Redirect;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @param Request $request
     * @return RedirectResponse|Redirector
     */
    public function index(Request $request)
    {
        if ($request->user()->hasRole('user')) {
            return redirect('/');
        }

        if ($request->user()->hasRole('admin')){
            return redirect('/admin/dashboard');
        }
    }

    public function getUserData(Request $request)
    {
        if ( $request->input('client') ) {
            return User::select('id', 'name', 'email')->get();
        }

        $columns = ['id', 'name', 'email'];
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
    }
}
