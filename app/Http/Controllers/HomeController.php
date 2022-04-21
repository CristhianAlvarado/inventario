<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use Exception;
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
        /* $empresa = Auth::user()->empresas()->get();
        // $empresa = Empresa::all();
        if(count($empresa)>1){
            return view('empresas', compact('empresa'));
            // return $empresa;
        }else{
            return view('home');
        } */
        // return Empresa::all();
        // return $empresa;
        return view('home');
    }

    public function empresas(){
        $empresa = Auth::user()->empresas()->get();
        return view('empresas', compact('empresa'));
    }

    public function ingresar(Empresa $empresa)
    {
        // return $request;
        try {
            $user = Auth::user();
            $user->empresa_activa = $empresa->id;
            $user->save();

            return [
                'success' => true,
                'message' => 'Ha ingresado correctamente'
            ];

        } catch (Exception $e) {
            return [
                'success' => false,
                'message' => $e->getMessage()
            ];
        }
    }

    public function lista(){
        return json_encode(Empresa::all());
    }
    
}
