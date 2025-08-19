<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $user = User::create([
            'name' => 'Andres',
            'email' => 'Andres@pruebas.com',
            'password' => bcrypt('12345678')
        ])->assignRole('Ing_Sonido'); // Asigna el rol después de la creación
        

            User::factory(9)->create();

        /*$user = new User();

        $user->name = 'Andres';
        $user->email = 'Andres@pruebas.com';
        $user->password = bcrypt('12345678');

        $user->save();*/
    }
}
