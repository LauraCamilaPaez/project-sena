<?php

namespace Database\Seeders;

use App\Models\TrainingCenter;
use Illuminate\Database\Seeder;

class TrainingCenterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $training_center = TrainingCenter::create([
            'name' => 'Centro de Electricidad, Electrónica y Telecomunicaciones',
            'address' => 'Av. 1 de Mayo #33-98',
            'nit' => '899.999034-1',
        ]);

        $training_center = TrainingCenter::create([
            'name' => 'Centro de Gestión de Mercados, Logística y Tecnologías de la Información',
            'address' => 'C. 19A #96c-40',
            'nit' => '899.999034-1',
        ]);
    }
}
