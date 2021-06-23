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
            $table->id();
            $table->string('hta')->nullable();
            $table->string('dm')->nullable();
            $table->string('ab')->nullable();
            $table->string('car')->nullable();
            $table->string('h')->nullable();
            $table->string('d')->nullable();
            $table->string('vih')->nullable();
            $table->string('t')->nullable();
            $table->string('este')->nullable();
            $table->string('aco')->nullable();
            $table->string('al')->nullable();
            $table->string('dro')->nullable();
            $table->string('tvp')->nullable();

            $table->string('e')->nullable();
            $table->string('p')->nullable();
            $table->string('c')->nullable();
            $table->string('hv')->nullable();
            $table->string('ea')->nullable();
            $table->string('l')->nullable();

            $table->string('familiares')->nullable();

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
