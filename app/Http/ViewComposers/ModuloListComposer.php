<?php

namespace app\Http\ViewComposers;

use App\Models\Modulo;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class ModuloListComposer
{
    public function compose(View $view)
    {
        $modulos = Auth::user()->modulos()->pluck('descripcion')->toArray();
        // $modulos = Modulo::all()->pluck('descripcion')->toArray();
        if (count($modulos)>0) {
            // $view->vc_modules = $modulos;
            $modulos=$modulos;
        }else{
            $modulos = Modulo::all()->pluck('descripcion')->toArray();
        }
        $view->with('vc_modules', $modulos);
    }
}