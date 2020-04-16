<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        if($user->role == 1){
            return view('/homeAdmin');
        }else if($user->role == 2){
            return redirect('/homeKasir');
        }else if($user->role == 3){
            return redirect('/homeOwner');
        }
    }

    public function indexKasir()
    {
        return view("homeKasir");
    }

    public function indexOwner()
    {
        return view("homeOwner");
    }
}
