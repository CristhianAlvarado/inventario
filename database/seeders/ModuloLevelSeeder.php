<?php

namespace Database\Seeders;

use App\Models\ModuloLevel;
use App\Models\User;
use Illuminate\Database\Seeder;

class ModuloLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $levels = [
            [
                'descripcion' => 'create-purchase',
                'idModulo' => '2'
            ],
            [
                'descripcion' => 'list-purchase',
                'idModulo' => '2'
            ],
            [
                'descripcion' => 'create-sale',
                'idModulo' => '3'
            ],
            [
                'descripcion' => 'list-sale',
                'idModulo' => '3'
            ],
            [
                'descripcion' => 'list-almacen',
                'idModulo' => '5'
            ],
            [
                'descripcion' => 'entradas',
                'idModulo' => '4'
            ],
            [
                'descripcion' => 'salidas',
                'idModulo' => '4'
            ],
        ];

        foreach ($levels as $l) {
            $level = ModuloLevel::create($l);
            $users = User::all();
            foreach ($users as $u) {
                $u->modulolevels()->attach($level->id);
            }
        }

    }
}
