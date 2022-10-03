<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

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
        $time = Carbon::now();

        DB::table('users')->insert([
            'name' => 'dev',
            'email' => 'dev@dev.dev',
            'password' => Hash::make('dev'),
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
            'Lara Croft: Tomb Rider'
        ] as $movie) {
            DB::table('movies')->insert([
                'title' => $movie,
                'price' => rand(100, 1000) / 100,
                'category_id' => rand(1, 6),
                'created_at' => $time->addSeconds(4),
                'updated_at' => $time
            ]);
        }
    }
}
