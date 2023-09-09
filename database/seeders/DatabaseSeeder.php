<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Crypt;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => Crypt::encrypt('Muhammad Mujahid'),
            'email' => Crypt::encrypt('muhammadmujahid14@gmail.com'),
            'password' => bcrypt('mamat1411')
        ]);

        User::factory(4)->create();

        Category::create([
            'name' => 'Back-End Development',
            'slug' => 'back-end-development'
        ]);

        Category::create([
            'name' => 'Front-End Programming',
            'slug' => 'front-end-development'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(5)->create();
    }
}
