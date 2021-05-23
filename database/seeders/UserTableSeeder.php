<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Administrador',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345a'),
        ]);
        $user->assignRole('Administrador');

        $user = User::create([
            'name' => 'Contratista',
            'email' => 'contratista@gmail.com',
            'password' => bcrypt('12345c'),
        ]);
        $user->assignRole('Contratista');

        $user = User::create([
            'name' => 'Supervisor',
            'email' => 'supervisor@gmail.com',
            'password' => bcrypt('12345su'),
        ]);
        $user->assignRole('Supervisor');

        $user = User::create([
            'name' => 'Secretario',
            'email' => 'secretario@gmail.com',
            'password' => bcrypt('12345se'),
        ]);
        $user->assignRole('Secretario');
    }
}
