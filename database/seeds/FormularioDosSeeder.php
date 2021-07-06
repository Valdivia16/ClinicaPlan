<?php

use Illuminate\Database\Seeder;
use App\FormularioDo;

class FormularioDosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //


        $formularioDos = new FormularioDo();
        $formularioDos->pla ="Preservativo";
        $formularioDos->save();
        $formularioDos = new FormularioDo();
        $formularioDos->pla ="Pastillas anticonceptivas";
        $formularioDos->save();
        $formularioDos = new FormularioDo();
        $formularioDos->pla ="Dispositivo Intrauterino (DIU)";
        $formularioDos->save();
        $formularioDos = new FormularioDo();
        $formularioDos->pla ="Vasectomía";
        $formularioDos->save();
        $formularioDos = new FormularioDo();
        $formularioDos->pla ="Píldora de emergencia";
        $formularioDos->save();
        $formularioDos = new FormularioDo();
        $formularioDos->pla ="Ligadura Tubaria";
        $formularioDos->save();
        $formularioDos = new FormularioDo();
        $formularioDos->pla ="Inyecciòn Anticonceptiva (1 mes)";
        $formularioDos->save();
        $formularioDos = new FormularioDo();
        $formularioDos->pla ="Inyecciòn Anticonceptiva (3 mes)";
        $formularioDos->save();
        $formularioDos = new FormularioDo();
        $formularioDos->pla ="Otro";
        $formularioDos->save();

    }
}
