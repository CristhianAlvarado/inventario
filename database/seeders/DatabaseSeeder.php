<?php

namespace Database\Seeders;

use App\Models\Configuracion;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ModuloSeeder::class);
        $this->call(ModuloLevelSeeder::class);

        $this->call(EmpresaSeeder::class);
        $this->call(TipoCdpSeeder::class);

        $this->call(ConfiguracionSeeder::class);
        
        $this->call(PaisSeeder::class);
        $this->call(DepartamentoSeeder::class);
        $this->call(ProvinciaSeeder::class);
        $this->call(DistritoSeeder::class);

        $this->call(AlmacenSeeder::class);
        $this->call(SerieSeeder::class);
    }
}
