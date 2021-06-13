<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */



        public function run(){
        $rol = new Role();
        $rol ->rol ="Doctora";
        $rol ->save();

        $rol = new Role();
        $rol ->rol ="Enfermera";
        $rol ->save();

        //
    }
}
