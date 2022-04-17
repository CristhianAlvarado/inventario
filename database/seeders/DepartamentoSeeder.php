<?php

namespace Database\Seeders;

use App\Models\Departamento;
use Illuminate\Database\Seeder;

class DepartamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Departamento::create(['id' => '01', 'descripcion' => 'AMAZONAS']);
        Departamento::create(['id' => '02', 'descripcion' => 'ANCASH']);
        Departamento::create(['id' => '03', 'descripcion' => 'APURIMAC']);
        Departamento::create(['id' => '04', 'descripcion' => 'AREQUIPA']);
        Departamento::create(['id' => '05', 'descripcion' => 'AYACUCHO']);
        Departamento::create(['id' => '06', 'descripcion' => 'CAJAMARCA']);
        Departamento::create(['id' => '07', 'descripcion' => 'CALLAO']);
        Departamento::create(['id' => '08', 'descripcion' => 'CUSCO']);
        Departamento::create(['id' => '09', 'descripcion' => 'HUANCAVELICA']);
        Departamento::create(['id' => '10', 'descripcion' => 'HUÁNUCO']);
        Departamento::create(['id' => '11', 'descripcion' => 'ICA']);
        Departamento::create(['id' => '12', 'descripcion' => 'JUNIN']);
        Departamento::create(['id' => '13', 'descripcion' => 'LA LIBERTAD']);
        Departamento::create(['id' => '14', 'descripcion' => 'LAMBAYEQUE']);
        Departamento::create(['id' => '15', 'descripcion' => 'LIMA']);
        Departamento::create(['id' => '16', 'descripcion' => 'LORETO']);
        Departamento::create(['id' => '17', 'descripcion' => 'MADRE DE DIOS']);
        Departamento::create(['id' => '18', 'descripcion' => 'MOQUEGUA']);
        Departamento::create(['id' => '19', 'descripcion' => 'PASCO']);
        Departamento::create(['id' => '20', 'descripcion' => 'PIURA']);
        Departamento::create(['id' => '21', 'descripcion' => 'PUNO']);
        Departamento::create(['id' => '22', 'descripcion' => 'SAN MARTIN']);
        Departamento::create(['id' => '23', 'descripcion' => 'TACNA']);
        Departamento::create(['id' => '24', 'descripcion' => 'TUMBES']);
        Departamento::create(['id' => '25', 'descripcion' => 'UCAYALI']);
    }
}
