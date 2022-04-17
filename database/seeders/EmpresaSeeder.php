<?php

namespace Database\Seeders;

use App\Models\Empresa;
use App\Models\User;
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
        $empresas = [
            [
                'ruc' => '20510716893',
                'razon_social' => 'Inversiones SAC',
                'direccion' => 'mi casa papi',
                'correo' => 'empresa@gmail.com',
                'telefono' => '924545720'
            ],
            [
                'ruc' => '20567716834',
                'razon_social' => 'Movil Shop SAC',
                'direccion' => 'covicorti',
                'correo' => 'empresa2@gmail.com',
                'telefono' => '948912308'
            ],
        ];

        foreach ($empresas as $e) {
            $empresa = Empresa::create($e);
            $users = User::all();
            foreach ($users as $u) {
                $u->empresas()->attach($empresa->id);
            }
        }

    }
}
