<?php

namespace Database\Seeders;

use App\Models\Configuracion;
use Illuminate\Database\Seeder;

class ConfiguracionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Configuracion::insert([
            'whatsapp' => '924545720',
            'visual' => '{"bg": "white", "header": "light", "navbar": "fixed", "sidebars": "light", "sidebar_theme": "dark"}',
            'navbar' => '',
            'empresa_id' => '1'
        ]);
    }
}
