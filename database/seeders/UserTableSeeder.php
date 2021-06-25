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
            'names' => 'Nestor Andrés',
            'lastnames' => 'Rodriguez García',
            'profession' => 'Director SENA',
            'gender_id' => 1,
            'email' => 'nestorandresrodriguez@gmail.com',
            'password' => bcrypt('12345ne'),
            'document_type_id' => 1,
            'document' => 1000987645,
            'phone' => 5678900,
            'mobile' => 3157428264,
            'status' => 1,
            'profile_picture' => 'https://mannatthemes.com/metrica/metrica_simple/assets/images/users/user-4.jpg',
            'training_center_id' => 1,
        ]);
        $user->assignRole('Administrador');

        $user = User::create([
            'names' => 'Brayan Felipe',
            'lastnames' => 'Martinez Rodriguez',
            'profession' => 'Instructor SENA',
            'gender_id' => 2,
            'email' => 'brayanfelipemartinez@gmail.com',
            'password' => bcrypt('12345b'),
            'document_type_id' => 1,
            'document' => 1000623451,
            'phone' => 6473636,
            'mobile' => 3124330097,
            'status' => 1,
            'profile_picture' => 'https://mannatthemes.com/metrica/metrica_simple/assets/images/users/user-3.jpg',
            'training_center_id' => 1,
        ]);
        $user->assignRole('Contratista');

        $user = User::create([
            'names' => 'Juan Pablo',
            'lastnames' => 'Cadena Quintero',
            'profession' => 'Estudiante SENA',
            'gender_id' => 2,
            'email' => 'juanpablocadena@gmail.com',
            'password' => bcrypt('12345j'),
            'document_type_id' => 1,
            'document' => 1999654789,
            'phone' => 4127843,
            'mobile' => 3057119159,
            'status' => 1,
            'profile_picture' => 'https://mannatthemes.com/metrica/metrica_simple/assets/images/users/user-2.jpg',
            'training_center_id' => 1,
        ]);
        $user->assignRole('Supervisor');

        $user = User::create([
            'names' => 'Nury Esperanza',
            'lastnames' => 'Padilla Rodriguez',
            'profession' => 'Administrativo SENA',
            'gender_id' => 1,
            'email' => 'nuryesperanzarodriguez@gmail.com',
            'password' => bcrypt('12345nu'),
            'document_type_id' => 1,
            'document' => 1334765890,
            'phone' => 2347654,
            'mobile' => 3140615413,
            'status' => 1,
            'profile_picture' => 'https://mannatthemes.com/metrica/metrica_simple/assets/images/users/user-1.jpg',
            'training_center_id' => 1,
        ]);
        $user->assignRole('Secretario');
    }
}
