<?php

namespace Database\Seeders;

use App\Models\Actuator;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call([
            UserTableSeeder::class,
            SensorsTableSeeder::class,
            ActuatorsTableSeeder::class,
        ]);
    }
}
