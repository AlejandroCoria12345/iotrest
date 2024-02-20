<?php

namespace Database\Seeders;

use Illuminate\Auth\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        User::create([
            'username' => 'admin',
            'password' => hash::make('123'),
            'rol' => 'A',
        ]);

        $faker = Faker::create();
        for($i=0; $i < 10; $i++){
            User::create([
                'username' => $faker->userName,
                'password' => hash::make('111'),
                'rol' => $faker->randomElement(['A', 'U', 'D'])
            ]);
        }
    }
}
