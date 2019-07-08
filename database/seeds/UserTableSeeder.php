<?php

use Illuminate\Database\Seeder;
use Ortoclear\Role;
use Ortoclear\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $role_root = Role::where('cargo','root')->first();
        $role_paciente = Role::where('cargo','odontologo')->first();
        $role_doctor = Role::where('cargo','paciente')->first();

        /*$root = new Root();
        $root->name = auth()->user()->name;
        $root->cargo = auth()->user()->cargo;
        $root->email = auth()->user()->email;
        $root->password = auth()->user()->password;
        $root->save();*/

        $root = new User();
        $root->name = "Administrador";
        $root->cargo = "root";
        $root->email = "root@ortoclear.co";
        $root->password = bcrypt('Colombia2019');
        $root->save();
        $root->roles()->attach($role_root);

        $root = new User();
        $root->name = "Foo";
        $root->cargo = "root";
        $root->email = "foo@ortoclear.co";
        $root->password = bcrypt('query');
        $root->save();
        $root->roles()->attach($role_root);

        $root = new User();
        $root->name = "Ortodocista_01";
        $root->cargo = "odontologo";
        $root->email = "clinica001@ortoclear.co";
        $root->password = bcrypt('Clinica001');
        $root->save();
        $root->roles()->attach($role_doctor);

        $root = new User();
        $root->name = "Ortodocista_02";
        $root->cargo = "odontologo";
        $root->email = "clinica002@ortoclear.co";
        $root->password = bcrypt('Clinica002');
        $root->save();
        $root->roles()->attach($role_doctor);

        $root = new User();
        $root->name = "Descubre";
        $root->cargo = "paciente";
        $root->email = "tratamiento@ortoclear.co";
        $root->password = bcrypt('paciente001');
        $root->save();
        $root->roles()->attach($role_paciente);
    }
}
