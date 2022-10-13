<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        DB::table('users')->insert([
            'name' => 'user',
            'email' => 'user@user.user',
            'password' => Hash::make('123'),
            'role' => 1
        ]);
        DB::table('users')->insert([
            'name' => 'dev',
            'email' => 'dev@dev.dev',
            'password' => Hash::make('123'),
            'role' => 10
        ]);
        DB::table('restaurants')->insert([
            'title' => 'Karpyne',
            'address' => 'Smiltynes 2',
            'city' => 'Klaipeda',
            'worktime' => '8-12'
        ]);
        DB::table('restaurants')->insert([
            'title' => 'Saltinelis',
            'address' => 'Kauno 2',
            'city' => 'Vievis',
            'worktime' => '10-22'
        ]);
    }
}
