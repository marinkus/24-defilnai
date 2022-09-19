<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
            DB::table('users')->insert([
                'name' => 'dev',
                'email' => 'dev@dev.dev',
                'password' => Hash::make('123'),
            ]);

            $faker = Faker::create('lt_LT');
            foreach (range(1, 20) as $_) {
                DB::table('saloons')->insert([
                    'title' => $faker->company,
                    'address' => $faker->address,
                    'phone' => $faker->phoneNumber
                ]);
            }

            foreach (range(1, 20) as $_) {
                DB::table('masters')->insert([
                    'name' => $faker->firstName($gender = 'female'),
                    'surname' => $faker->lastName($gender = 'female'),
                    'saloon_id' => (rand(1, 20))
                ]);
            }

    }

}
