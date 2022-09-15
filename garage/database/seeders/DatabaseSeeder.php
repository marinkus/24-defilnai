<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        DB::table('users')->insert([
            'name' => 'vartotojas',
            'email' => 'vartotojas@gmail.com',
            'password' => Hash::make('123'),
        ]);
        $faker = Faker::create('lt_LT');
        foreach (range(1, 20) as $_) {
            DB::table('mechanics')->insert([
                'name' => $faker->firstName($gender = 'male'),
                'surname' => $faker->lastName($gender = 'male'),
            ]);
        }
        $makers = ['MB', 'Volvo', 'Scania', 'Kamaz', 'MAN', 'DAF', 'Iveco', 'Mack', 'Tesla', 'Lamborghini'];

        foreach (range(1, 223) as $_) {
            $str = Str::random(7);
            DB::table('trucks')->insert([
                'maker' => $makers[rand(0, count($makers) - 1)],
                'plate' => strtoupper($str),
                'make_year' => rand(1980, 2022),
                'mechanic_notices' => $faker->paragraph(rand(1, 10)),
                'mechanic_id' => (rand(1, 20))
            ]);
        }
    }
}
