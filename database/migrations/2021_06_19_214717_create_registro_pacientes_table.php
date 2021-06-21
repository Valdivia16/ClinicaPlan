<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistroPacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro_pacientes', function (Blueprint $table) {
            $table->id();
            $table->string('dni')->unique();
            $table->string('nda')->unique();
            $table->string('primerNombre');
            $table->string('segundoNombre');
            $table->string('primerApellido');
            $table->string('segundoApellido');
            $table->foreignId('id_pais')->references('id')->on('registro_paises');
            $table->foreignId('idDepartamento')->references('id')->on('departamentos');
            $table->foreignId('idMunicipio')->references('id')->on('municipios');
            $table->string('direccion');
            $table->string('telefono',8)->unique();
            $table->string('nombrePadre');
            $table->string('nombreMadre');
            $table->string('fechaNacimiento');
            $table->string('sexo');
            $table->string('foto')->nullable();
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
        Schema::dropIfExists('registro_pacientes');
    }
}
