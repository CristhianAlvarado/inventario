<?php

namespace App\Http\Controllers;

use App\Models\Almacen;
use App\Models\Serie;
use App\Models\TipoCdp;
use Illuminate\Http\Request;

class SerieController extends Controller
{
    public function lista(Almacen $almacen){
        $series = Almacen::with('series.tipocdp')->where('id',$almacen->id)->get();
        return $series;
    }

    public function combocdps(){
        $cdps = TipoCdp::all(); 
        return $cdps;
    }

    public function store(Request $request){
        $validate = $request->validate([
            'tipocdp_id' => 'required',
            'numero' => 'required'
        ],[
            'tipocdp_id.required' => 'Debe seleccionar el tipo de comprobante',
            'numero.required' => 'Debe ingresar un número'
        ]);

        $validar = Serie::where('numero',$request->numero)->where('tipocdp_id', $request->tipocdp_id)->first();
        if ($validar) {
            return [
                'success' => false,
                'message' => 'Ya existe el la serie',
                'serie' => $validar
            ];
        }

        $serie = new Serie();

        $serie->tipocdp_id = $request->tipocdp_id;
        $serie->almacen_id = $request->almacen_id;
        $serie->numero = $request->numero;

        $serie->save();

        return [
            'success' => true,
            'message' => 'Serie añadida con éxito'
        ];
    }
}
