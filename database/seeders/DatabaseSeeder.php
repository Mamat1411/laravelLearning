<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => bcrypt('Muhammad Mujahid'),
            'email' => bcrypt('muhammadmujahid14@gmail.com'),
            'password' => bcrypt('mamat1411')
        ]);

        User::factory(4)->create();
    }
}
