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
            'profession' => 'Director SENA',
            'gender_id' => 1,
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345a'),
            'document_type_id' => 1,
            'document' => 111111,
            'phone' => 567890,
            'mobile' => 34567890,
            'status' => 1,
            'profile_picture' => 'Hola',
        ]);
        $user->assignRole('Administrador');

        $user = User::create([
            'names' => 'Contratista',
            'lastnames' => 'Contratista',
            'profession' => 'Docente SENA',
            'gender_id' => 2,
            'email' => 'contratista@gmail.com',
            'password' => bcrypt('12345c'),
            'document_type_id' => 1,
            'document' => 222222,
            'phone' => 567890,
            'mobile' => 34567890,
            'status' => 1,
            'profile_picture' => 'Hola',
        ]);
        $user->assignRole('Contratista');

        $user = User::create([
            'names' => 'Supervisor',
            'lastnames' => 'Supervisor',
            'profession' => 'Estudiante SENA',
            'gender_id' => 3,
            'email' => 'supervisor@gmail.com',
            'password' => bcrypt('12345su'),
            'document_type_id' => 1,
            'document' => 333333,
            'phone' => 567890,
            'mobile' => 34567890,
            'status' => 1,
            'profile_picture' => 'Hola',
        ]);
        $user->assignRole('Supervisor');

        $user = User::create([
            'names' => 'Secretario',
            'lastnames' => 'Secretario',
            'profession' => 'Administrativo SENA',
            'gender_id' => 1,
            'email' => 'secretario@gmail.com',
            'password' => bcrypt('12345se'),
            'document_type_id' => 1,
            'document' => 444444,
            'phone' => 567890,
            'mobile' => 34567890,
            'status' => 1,
            'profile_picture' => 'Hola',

        ]);
        $user->assignRole('Secretario');
    }
}
