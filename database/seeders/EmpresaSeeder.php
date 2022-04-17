<?php

namespace Database\Seeders;

use App\Models\Empresa;
use Illuminate\Database\Seeder;

class EmpresaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Empresa::create([
            'ruc' => '20510716893',
            'razon_social' => 'Inversiones SAC',
            'direccion' => 'mi casa papi',
            'correo' => 'empresa@gmail.com',
            'telefono' => '924545720',
            'user_id' => '1'
        ]);
    }
}
