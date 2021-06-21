<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

         $this->call(RoleSeeder::class);
         $this->call(UserSeeder::class);
         $this->call(Registro_paiseSeeder::class);
         $this->call(DepartamentoSeeder::class);
         $this->call(MunicipioSeeder::class);
         $this->call(SexoSeeder::class);
    }
}
