<?php

namespace Database\Seeders;

use App\Models\Campus;
use Illuminate\Database\Seeder;

class CampusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $campus = Campus::create([
            'name' => 'Sede Colombia',
            'address' => 'Cl. 69 #20-36',
            'phone' => '4541411',
        ]);

        $campus = Campus::create([
            'name' => 'Sede Ricaurte',
            'address' => 'Cl. 79 #20-36',
            'phone' => '4445451',
        ]);
    }
}
