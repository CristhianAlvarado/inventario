<?php

namespace Database\Seeders;

use App\Models\Pais;
use Illuminate\Database\Seeder;

class PaisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pais::create(['id' => 'PE','descripcion' => 'PERU']);
        Pais::create(['id' => 'CO','descripcion' => 'COLOMBIA']);
        Pais::create(['id' => 'CL','descripcion' => 'CHILE']);
    }
}
