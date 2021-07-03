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
            $table->string('htp')->nullable();
            $table->string('dm')->nullable();
            $table->string('ab')->nullable();
            $table->string('ca')->nullable();
            $table->string('hipe')->nullable();
            $table->string('depe')->nullable();
            $table->string('vih')->nullable();
            $table->string('taba')->nullable();
            $table->string('ede')->nullable();
            $table->string('aco')->nullable();
            $table->string('alco')->nullable();
            $table->string('drogas')->nullable();
            $table->string('tvp')->nullable();
            $table->string('otroapp')->nullable();
            $table->string('descripcionapp')->nullable();
            $table->string('dia')->nullable();
            $table->string('epi')->nullable();
            $table->string('aler')->nullable();
            $table->string('otroapf')->nullable();
            $table->string('descripcionapf')->nullable();
            $table->string('traumasi')->nullable();
            $table->string('traumano')->nullable();
            $table->string('descripcionqui')->nullable();
            $table->string('alersi')->nullable();
            $table->string('alerno')->nullable();
            $table->string('descripcionaler')->nullable();
            $table->string('emba')->nullable();
            $table->string('partos')->nullable();
            $table->string('cesaria')->nullable();
            $table->string('hijovivo')->nullable();
            $table->string('embaActual')->nullable();
            $table->string('lacta')->nullable();
            $table->string('cito')->nullable();
            $table->string('mestrua')->nullable();
            $table->string('descripcionfin')->nullable();
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
