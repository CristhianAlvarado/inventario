<?php

namespace Database\Seeders;

use App\Models\Almacen;
use App\Models\User;
use Illuminate\Database\Seeder;

class AlmacenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=User::all()->first();
        
        
        Almacen::create([
            'descripcion' => 'Oficina Principal',
            'pais_id' => 'PE',
            'departamento_id' => '13',
            'provincia_id' => '1301',
            'distrito_id' => '130101',
            'email' => $user->email,
            'codigo_fiscal' => '0000',
            'empresa_id' => '1'
        ]);
    }
}
