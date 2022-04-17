<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $empresa = Auth::user()->empresas()->get();
        if(count($empresa)>1){
            return view('empresas', compact('empresa'));
            // return $empresa;
        }else{
            return view('home');
        }
        // return $empresas;
        // return view('empresas');
    }
}
