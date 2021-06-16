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
            'names' => 'Administrador',
            'lastnames' => 'Administrador',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345a'),
            'gender' => 1,
            'document_type' => 1,
            'document' => 111111,
            'phone' => 567890,
            'mobile' => 34567890,
            'status' => 1,
            'profile_picture' => 'Hola',
            'role_id' => 1,
        ]);
        $user->assignRole('Administrador');

        $user = User::create([
            'names' => 'Contratista',
            'lastnames' => 'Contratista',
            'email' => 'contratista@gmail.com',
            'password' => bcrypt('12345c'),
            'gender' => 1,
            'document_type' => 1,
            'document' => 222222,
            'phone' => 567890,
            'mobile' => 34567890,
            'status' => 1,
            'profile_picture' => 'Hola',
            'role_id' => 2,
        ]);
        $user->assignRole('Contratista');

        $user = User::create([
            'names' => 'Supervisor',
            'lastnames' => 'Supervisor',
            'email' => 'supervisor@gmail.com',
            'password' => bcrypt('12345su'),
            'gender' => 1,
            'document_type' => 1,
            'document' => 333333,
            'phone' => 567890,
            'mobile' => 34567890,
            'status' => 1,
            'profile_picture' => 'Hola',
            'role_id' => 3,
        ]);
        $user->assignRole('Supervisor');

        $user = User::create([
            'names' => 'Secretario',
            'lastnames' => 'Secretario',
            'email' => 'secretario@gmail.com',
            'password' => bcrypt('12345se'),
            'gender' => 1,
            'document_type' => 1,
            'document' => 444444,
            'phone' => 567890,
            'mobile' => 34567890,
            'status' => 1,
            'profile_picture' => 'Hola',
            'role_id' => 4,

        ]);
        $user->assignRole('Secretario');
    }
}
