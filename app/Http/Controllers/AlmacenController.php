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
        $almacenes = Almacen::where('empresa_id', $empresa_id)->where('estado', '01')->get();
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

    public function data(Almacen $almacen){
        return json_encode($almacen);
    }

    public function store(Request $request){
        $validate = $request->validate([
            'descripcion' => 'required|unique:almacens',
            'pais_id' => 'required',
            'departamento_id' => 'required',
            'provincia_id' => 'required',
            'distrito_id' => 'required',
            'email' => 'required',
            'telefono' => 'required',
            'codigo_fiscal' => 'required',
        ],
        [
            'descripcion.required' => 'Debe ingresar una descripcion',
            'descripcion.unique' => 'Debe ingresar otra descripcion',
            'pais_id.required' => 'Debe seleccionar un pais',
            'departamento_id.required' => 'Debe seleccionar un departamento',
            'provincia_id.required' => 'Debe seleccionar una provincia',
            'distrito_id.required' => 'Debe seleccionar un distrito',
            'email.required' => 'Debe ingresar un email',
            'codigo_fiscal.required' => 'Debe ingresar un codigo fiscal',
            'telefono.required' => 'Debe ingresar un telefono',
        ]);

        $almacen = new Almacen();
        $almacen->descripcion = $request->descripcion;
        $almacen->pais_id = $request->pais_id;
        $almacen->departamento_id = $request->departamento_id;
        $almacen->provincia_id = $request->provincia_id;
        $almacen->distrito_id = $request->distrito_id;
        $almacen->direccion = $request->direccion;
        $almacen->email = $request->email;
        $almacen->telefono = $request->telefono;
        $almacen->codigo_fiscal = $request->codigo_fiscal;
        $almacen->direccion_fiscal = $request->direccion_fiscal;
        $almacen->logo = $request->logo;
        $almacen->info_add = $request->info_add;
        $almacen->empresa_id = Auth::user()->empresa_activa;

        $almacen->save();

        return [
            'success' => true,
            'message' => 'Se agrego correctamento'
        ];
        
    }

    public function update(Request $request){
        $validate = $request->validate([
            'id' => 'required',
            'descripcion' => 'required',
            'pais_id' => 'required',
            'departamento_id' => 'required',
            'provincia_id' => 'required',
            'distrito_id' => 'required',
            'email' => 'required',
            'telefono' => 'required',
            'codigo_fiscal' => 'required',
        ],
        [
            'descripcion.required' => 'Debe ingresar una descripcion'
        ]);

        $almacen = Almacen::find($request->id);
        $almacen->descripcion = $request->descripcion;
        $almacen->pais_id = $request->pais_id;
        $almacen->departamento_id = $request->departamento_id;
        $almacen->provincia_id = $request->provincia_id;
        $almacen->distrito_id = $request->distrito_id;
        $almacen->direccion = $request->direccion;
        $almacen->email = $request->email;
        $almacen->telefono = $request->telefono;
        $almacen->codigo_fiscal = $request->codigo_fiscal;
        $almacen->direccion_fiscal = $request->direccion_fiscal;
        $almacen->logo = $request->logo;
        $almacen->info_add = $request->info_add;
        $almacen->empresa_id = Auth::user()->empresa_activa;

        $almacen->save();

        return [
            'success' => true,
            'message' => 'Se actualizo correctamento el almacen'
        ];
        
    }

    public function delete(Almacen $almacen){
        $almacen->estado = '02';
        $almacen->save();
        return [
            'success' => true,
            'message' => 'Almacen eliminado con éxito'
        ];
    }
}
