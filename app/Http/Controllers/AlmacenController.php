<?php

namespace App\Http\Controllers;

use App\Models\Almacen;
use App\Models\Departamento;
use App\Models\Distrito;
use App\Models\Empresa;
use App\Models\Pais;
use App\Models\Provincia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AlmacenController extends Controller
{
    public function index(){
        return view('pages.almacen.index');
    }

    public function almacenes()
    {
        $empresa_id = Auth::user()->empresa_activa;
        $almacenes = Almacen::where('empresa_id', $empresa_id)->get();
        // $almacenes = Almacen::all();
        return json_encode($almacenes);
        // return $almacenes;
    }

    public function tables(){
        $paises = Pais::where('activo',1)->orderBy('descripcion')->get();
        $departamentos = Departamento::where('activo',1)->orderBy('descripcion')->get();
        $provincias = Provincia::where('activo',1)->orderBy('descripcion')->get();
        $distritos = Distrito::where('activo',1)->orderBy('descripcion')->get();
        $empresas = Empresa::all();
        return [
            'paises' => $paises,
            'departamentos' => $departamentos,
            'provincias' => $provincias,
            'distritos' => $distritos,
            'empresas' => $empresas
        ];
    }
}
