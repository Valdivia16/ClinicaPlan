<?php

use Illuminate\Database\Seeder;
use App\Registro_paise;

class Registro_paiseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $registro_paises = new Registro_paise();
        $registro_paises ->pais ="Honduras";
        $registro_paises ->save();
    }
}
