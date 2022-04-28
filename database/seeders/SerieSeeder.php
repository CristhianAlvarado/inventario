<?php

namespace Database\Seeders;

use App\Models\Serie;
use Illuminate\Database\Seeder;

class SerieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Serie::create([
            'almacen_id' => '1',
            'tipocdp_id' => '2',
            'numero' => 'F001'
        ]);

        Serie::create([
            'almacen_id' => '1',
            'tipocdp_id' => '4',
            'numero' => 'B001'
        ]);

        Serie::create([
            'almacen_id' => '1',
            'tipocdp_id' => '8',
            'numero' => 'NC01'
        ]);

        Serie::create([
            'almacen_id' => '1',
            'tipocdp_id' => '9',
            'numero' => 'ND01'
        ]);

    }
}
