<?php

use App\Sexo;
use Illuminate\Database\Seeder;

class SexoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $sexo = new Sexo();
        $sexo ->sexo ="Masculino";
        $sexo ->save();

        $sexo = new Sexo();
        $sexo ->sexo ="Femenino";
        $sexo ->save();
    }
}
