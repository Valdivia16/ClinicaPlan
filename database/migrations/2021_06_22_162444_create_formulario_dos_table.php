<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormularioDosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formulario_dos', function (Blueprint $table) {
            $table->id()->references('id')->on('registro_pacientes');
            $table->binary('htp')->nullable();
            $table->binary('dm')->nullable();
            $table->binary('ab')->nullable();
            $table->binary('ca')->nullable();
            $table->binary('hipe')->nullable();
            $table->binary('depe')->nullable();
            $table->binary('vih')->nullable();
            $table->binary('taba')->nullable();
            $table->binary('ede')->nullable();
            $table->binary('aco')->nullable();
            $table->binary('alco')->nullable();
            $table->binary('drogas')->nullable();
            $table->binary('tvp')->nullable();
            $table->binary('otroapp')->nullable();
            $table->string('descripcionapp',500)->nullable();

            $table->binary('dia')->nullable();
            $table->binary('epi')->nullable();
            $table->binary('aler')->nullable();
            $table->binary('otroapf')->nullable();
            $table->string('descripcionapf',500)->nullable();

            $table->binary('traumasi')->nullable();
            $table->binary('traumano')->nullable();
            $table->string('descripcionqui',500)->nullable();

            $table->binary('alersi')->nullable();
            $table->binary('alerno')->nullable();
            $table->string('descripcionaler',500)->nullable();

            $table->string('emba')->nullable();
            $table->string('partos')->nullable();
            $table->string('cesaria')->nullable();
            $table->string('hijovivo')->nullable();
            $table->binary('embaActual')->nullable();
            $table->binary('lacta')->nullable();
            $table->binary('cito')->nullable();

            $table->string('aborto')->nullable();
            $table->string('mestrua')->nullable();
            $table->string('pla')->nullable();
            $table->string('descripcionfin',500)->nullable();
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
        Schema::dropIfExists('formulario_dos');
    }
}
