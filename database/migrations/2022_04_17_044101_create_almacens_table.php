<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlmacensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('almacens', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion',120);
            $table->char('pais_id',2);
            $table->char('departamento_id',2)->nullable();
            $table->char('provincia_id',4)->nullable();
            $table->char('distrito_id',6)->nullable();
            $table->string('direccion',120)->nullable();
            $table->string('email',120);
            $table->string('telefono',20)->nullable();
            $table->char('codigo_fiscal',10);
            $table->string('direccion_fiscal')->nullable();
            $table->string('logo')->nullable();
            $table->string('info_add')->nullable();
            $table->unsignedBigInteger('empresa_id');

            $table->foreign('pais_id')->references('id')->on('pais');
            $table->foreign('departamento_id')->references('id')->on('departamentos');
            $table->foreign('provincia_id')->references('id')->on('provincias');
            $table->foreign('distrito_id')->references('id')->on('distritos');
            $table->foreign('empresa_id')->references('id')->on('empresas');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('almacens');
    }
}
