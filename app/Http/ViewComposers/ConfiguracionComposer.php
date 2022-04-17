<?php

namespace app\Http\ViewComposers;

use App\Models\Configuracion;
use App\Models\Empresa;
use App\Models\Modulo;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class ConfiguracionComposer
{
    public function compose(View $view)
    {
        $empresa_id = Auth::user()->empresa_activa;
        // $empresa = Empresa::find($empresa_id); 
        $configuracion = Empresa::find($empresa_id)->configuraciones()->first();
        // $modulos = Modulo::all()->pluck('descripcion')->toArray();
        if (is_null($configuracion->visual)) {
            $defaults = [
                'bg' => 'light',
                'header' => 'light',
                'sidebars' => 'light',
            ];
            $configuracion->visual = $defaults;
            $configuracion->save();
        }

        $view->with('vc_configuracion', $configuracion);
    }
}