<?php

use Illuminate\Database\Seeder;
use App\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        //
        $user = new User();
        $user ->name ="Jennifer";
        $user ->email ="jennichava71@gmail.com";
        $user ->password =bcrypt("12345679");
        $user ->rol ="1";
        $user ->save();

    }
}
