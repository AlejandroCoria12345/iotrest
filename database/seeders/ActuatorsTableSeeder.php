<?php

namespace Database\Seeders;

use App\Models\Actuator;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sensor;
use Faker\Factory as Faker;

class   ActuatorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i = 0; $i < 20; $i++){
            Actuator::create([
                'name' => $faker->unique()->name(),
                'type' => $faker->randomElement(['Led', 'Motor', 'Rele' ]),
                'value' => $faker->randomFloat(2, 0, 100),
                'user_id' => rand(1, 11),

            ]);
        }
    }
}
