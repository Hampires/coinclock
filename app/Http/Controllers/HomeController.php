<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Auth;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //
    }

    public function invite($username)
    {
        Session::put('refer_code', $username);
        // return view('auth.register');
        return redirect('/register');
    }

}
