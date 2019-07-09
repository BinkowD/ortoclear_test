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
        $role = new Role(); 
        $role->cargo = "root"; 
        $role->descripcion = "Administrador";
        $role->save();

        $role = new Role();
        $role->cargo = "odontologo";
        $role->descripcion = "Doctor(a)";
        $role->save();

        $role = new Role();
        $role->cargo = "paciente";
        $role->descripcion = "Paciente";
        $role->save();
    }
}
