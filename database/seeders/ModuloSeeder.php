<?php

namespace Database\Seeders;

use App\Models\Modulo;
use App\Models\User;
use Illuminate\Database\Seeder;

class ModuloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $modulos = [
            [
                'descripcion' => 'dashboard',
                'order_menu' => '1'
            ],
            [
                'descripcion' => 'compras',
                'order_menu' => '2'
            ],
            [
                'descripcion' => 'ventas',
                'order_menu' => '3'
            ],
            [
                'descripcion' => 'configuracion',
                'order_menu' => '6'
            ],
            [
                'descripcion' => 'almacen',
                'order_menu' => '5'
            ],
            [
                'descripcion' => 'inventario',
                'order_menu' => '4'
            ],
        ];

        foreach ($modulos as $m) {
            $modulo = Modulo::create($m);
            $users = User::all();
            foreach ($users as $u) {
                $u->modulos()->attach($modulo->id);
            }
        }


    }
}
