<?php

use Illuminate\Database\Seeder;
use App\ReferenciaEnfermedad;

class ReferenciaEnfermedades extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $refrencia = new ReferenciaEnfermedad();
        $refrencia ->codigo="A00";
        $refrencia ->descripcion ="Cólera";
        $refrencia ->save();
        $refrencia = new ReferenciaEnfermedad();
        $refrencia ->codigo="A00.0";
        $refrencia ->descripcion ="Cólera debido a Vibrio cholerae 01, biotipo cholerae";
        $refrencia ->save();
    }
}
