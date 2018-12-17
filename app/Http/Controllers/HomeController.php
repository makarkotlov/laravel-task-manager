<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
=======
use Illuminate\Http\Request;

>>>>>>> 28c13ecc60d20bc1514693c719585652efc161b3
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD

=======
>>>>>>> 28c13ecc60d20bc1514693c719585652efc161b3
        return view('home');
    }
}
