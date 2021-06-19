<?php

namespace Database\Seeders;

use App\Models\Gender;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gender = Gender::create([
            'gender' => 'Femenino',
        ]);

        $gender = Gender::create([
            'gender' => 'Masculino',
        ]);

        $gender = Gender::create([
            'gender' => 'LGBTIQ+',
        ]);
    }
}
