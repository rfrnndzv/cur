<?php

namespace Database\Seeders;

use App\Models\Persona;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $persona = new Persona();
        $persona->ci        = '6120942';
        $persona->nombres   = 'Rodrigo';
        $persona->apellidos = 'Fernández';
        $persona->save();

        $usuario = new User();
        $usuario->ci        = '6120942';
        $usuario->email    = 'rfrnndzv@gmail.com';
        $usuario->password  = Hash::make('12345678');
        $usuario->nivel     = '1';
        $usuario->save();


        $persona = new Persona();
        $persona->ci        = '5960579';
        $persona->nombres   = 'Ghimena';
        $persona->apellidos = 'Ballon';
        $persona->save();

        $usuario = new User();
        $usuario->ci        = '5960579';
        $usuario->email    = 'ghimenaballonconde@gmail.com';
        $usuario->password  = Hash::make('76596471');
        $usuario->nivel     = '2';
        $usuario->save();
    }
}
