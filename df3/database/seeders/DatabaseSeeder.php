<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Faker\Factory as Faker;

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
        $faker = Faker::create('lt_LT');
        $time = Carbon::now();

        DB::table('users')->insert([
            'name' => 'bebras',
            'email' => 'bebras@gmail.com',
            'password' => Hash::make('123'),
            'role' => 1,
            'created_at' => $time,
            'updated_at' => $time
        ]);
        DB::table('users')->insert([
            'name' => 'dev',
            'email' => 'dev@dev.dev',
            'password' => Hash::make('dev'),
            'role' => 10,
            'created_at' => $time,
            'updated_at' => $time
        ]);


        foreach([
            'Drama',
            'Comedy',
            'Action',
            'Documentary',
            'Horror',
            'Sci-fi'
        ] as $cat) {
            DB::table('categories')->insert([
                'title' => $cat,
                'created_at' => $time->addSeconds(1),
                'updated_at' => $time
            ]);
        }

        foreach([
            'Shawshank Redemption',
            'Home alone',
            'Die hard 3',
            'Mission impossible',
            'Robocop',
            'Terminator',
            'Harry Potter and Chamber of Secrets',
            'Harry Potter and Sorcerers stone',
            'Harry Potter and the Prisoner of Azkaban',
            'Pirates of the Caribbean: Black pearl',
            'Pirates of the Caribbean and Deadmans chest',
            'Lara Croft: Tomb Rider',
            'Fifty shades of Sasha Grey'
        ] as $movie) {
            DB::table('movies')->insert([
                'title' => $movie,
                'price' => rand(100, 1000) / 100,
                'category_id' => rand(1, 6),
                'created_at' => $time->addSeconds(4),
                'updated_at' => $time
            ]);
        }
        foreach(range(1, 22) as $_) {
            DB::table('comments')->insert([
                'post' => $faker->paragraph(rand(1, 10)),
                'movie_id' => rand(1, 13),
                'created_at' => $time->addSeconds(4),
                'updated_at' => $time
            ]);
        }
    }
}
