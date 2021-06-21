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
        $departamento ->id_pais ="1";
        $departamento ->save();
        $departamento = new Departamento();
        $departamento ->departamento ="Colón";
        $departamento ->id_pais ="1";
        $departamento ->save();
        $departamento = new Departamento();
        $departamento ->departamento ="Comayagua";
        $departamento ->id_pais ="1";
        $departamento ->save();
        $departamento = new Departamento();
        $departamento ->departamento ="Copán";
        $departamento ->id_pais ="1";
        $departamento ->save();
        $departamento = new Departamento();
        $departamento ->departamento ="Cortés";
        $departamento ->id_pais ="1";
        $departamento ->save();
        $departamento = new Departamento();
        $departamento ->departamento ="Choluteca";
        $departamento ->id_pais ="1";
        $departamento ->save();
        $departamento = new Departamento();
        $departamento ->departamento ="El Paraíso";
        $departamento ->id_pais ="1";
        $departamento ->save();
        $departamento = new Departamento();
        $departamento ->departamento ="Francisco Morazón";
        $departamento ->id_pais ="1";
        $departamento ->save();
        $departamento = new Departamento();
        $departamento ->departamento ="Gracias a Dios";
        $departamento ->id_pais ="1";
        $departamento ->save();
        $departamento = new Departamento();
        $departamento ->departamento ="Intibucá";
        $departamento ->id_pais ="1";
        $departamento ->save();
        $departamento = new Departamento();
        $departamento ->departamento ="Islas de la Bahía";
        $departamento ->id_pais ="1";
        $departamento ->save();
        $departamento = new Departamento();
        $departamento ->departamento ="La Paz";
        $departamento ->id_pais ="1";
        $departamento ->save();
        $departamento = new Departamento();
        $departamento ->departamento ="Lempira";
        $departamento ->id_pais ="1";
        $departamento ->save();
        $departamento = new Departamento();
        $departamento ->departamento ="Ocotepeque";
        $departamento ->id_pais ="1";
        $departamento ->save();
        $departamento = new Departamento();
        $departamento ->departamento ="Olancho";
        $departamento ->id_pais ="1";
        $departamento ->save();
        $departamento = new Departamento();
        $departamento ->departamento ="Santa Bárbara";
        $departamento ->id_pais ="1";
        $departamento ->save();
        $departamento = new Departamento();
        $departamento ->departamento ="Valle";
        $departamento ->id_pais ="1";
        $departamento ->save();
        $departamento = new Departamento();
        $departamento ->departamento ="Yoro";
        $departamento ->id_pais ="1";
        $departamento ->save();
    }
}
