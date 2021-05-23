<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = [
            ['name' => 'Administrador'],
            ['name' => 'Contratista'],
            ['name' => 'Supervisor'],
            ['name' => 'Secretario'],
        ];

        foreach ($array as $key => $value){
            Role::create(['name' => $value['name'], 'guard_name' => 'web']);
        }
    }
}
