<?php

namespace app\Http\ViewComposers;

use App\Models\ModuloLevel;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class LevelsListComposer
{
    public function compose(View $view)
    {
        $modulos = Auth::user()->modulolevels()->pluck('descripcion')->toArray();
        if (count($modulos)<=0) {
            $modulos = ModuloLevel::all()->pluck('descripcion')->toArray();
        }
        $view->with('vc_module_levels', $modulos);
    }
}