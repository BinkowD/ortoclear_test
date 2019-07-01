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
        $role_paciente = Role::where('cargo','paciente')->first();
        $role_odontologo = Role::where('cargo','odontologo')->first();

        /*$root = new Root();
        $root->name = auth()->user()->name;
        $root->cargo = auth()->user()->cargo;
        $root->email = auth()->user()->email;
        $root->password = auth()->user()->password;
        $root->save();*/

        $root = new Root();
        $root->name = "admid";
        $root->cargo = "root";
        $root->email = "admid@ortoclear.com";
        $root->password = bcrypt('query');
        $root->save();
        $root->roles()->attach($role_root);

        $root = new Root();
        $root->name = "doctor";
        $root->cargo = "odontologo";
        $root->email = "doctor@ortoclear.com";
        $root->password = bcrypt('query');
        $root->save();
        $root->roles()->attach($role_odontologo);

        $root = new Root();
        $root->name = "paciente";
        $root->cargo = "paciente";
        $root->email = "paciente@ortoclear.com";
        $root->password = bcrypt('query');
        $root->save();
        $root->roles()->attach($role_paciente);
    }
}
