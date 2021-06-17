<?php

use Illuminate\Database\Seeder;
use App\Departamento;

class DepartamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $departamento = new Departamento();
        $departamento ->departamento ="Atlántida";
        $departamento ->save();
        $departamento = new Departamento();
        $departamento ->departamento ="Colón";
        $departamento ->save();
        $departamento = new Departamento();
        $departamento ->departamento ="Comayagua";
        $departamento ->save();
        $departamento = new Departamento();
        $departamento ->departamento ="Copán";
        $departamento ->save();
        $departamento = new Departamento();
        $departamento ->departamento ="Cortés";
        $departamento ->save();
        $departamento = new Departamento();
        $departamento ->departamento ="Choluteca";
        $departamento ->save();
        $departamento = new Departamento();
        $departamento ->departamento ="El Paraíso";
        $departamento ->save();
        $departamento = new Departamento();
        $departamento ->departamento ="Francisco Morazón";
        $departamento ->save();
        $departamento = new Departamento();
        $departamento ->departamento ="Gracias a Dios";
        $departamento ->save();
        $departamento = new Departamento();
        $departamento ->departamento ="Intibucá";
        $departamento ->save();
        $departamento = new Departamento();
        $departamento ->departamento ="Islas de la Bahía";
        $departamento ->save();
        $departamento = new Departamento();
        $departamento ->departamento ="La Paz";
        $departamento ->save();
        $departamento = new Departamento();
        $departamento ->departamento ="Lempira";
        $departamento ->save();
        $departamento = new Departamento();
        $departamento ->departamento ="Ocotepeque";
        $departamento ->save();
        $departamento = new Departamento();
        $departamento ->departamento ="Olancho";
        $departamento ->save();
        $departamento = new Departamento();
        $departamento ->departamento ="Santa Bárbara";
        $departamento ->save();
        $departamento = new Departamento();
        $departamento ->departamento ="Valle";
        $departamento ->save();
        $departamento = new Departamento();
        $departamento ->departamento ="Yoro";
        $departamento ->save();

    }
}
