<?php

use Illuminate\Database\Seeder;
use Ortoclear\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = new User();
        $user->cargo = "root";
        $user->save();

        $user = new User();
        $user->cargo = "paciente";
        $user->save();
        
        $user = new User();
        $user->cargo = "odontologo";
        $user->save();
    }
}
