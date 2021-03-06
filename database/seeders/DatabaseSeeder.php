<?php

namespace Database\Seeders;

use App\Models\TrainingCenter;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class);
        $this->call(GenderTableSeeder::class);
        $this->call(DocumentTypeTableSeeder::class);
        $this->call(TrainingCenterTableSeeder::class);
        $this->call(CampusTableSeeder::class);
        $this->call(NewsTableSeeder::class);
        $this->call(UserTableSeeder::class);
        // \App\Models\User::factory(100)->create();
    }
}
