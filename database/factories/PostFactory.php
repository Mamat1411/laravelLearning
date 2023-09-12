<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(mt_rand(2,8), false),
            'category_id' => mt_rand(1,3),
            'user_id' => mt_rand(1,5),
            'slug' => fake()->slug(mt_rand(2,8)),
            'excerpt' => fake()->sentence(mt_rand(8,10), false),
            'body' => collect(fake()->paragraphs(mt_rand(3,8)))
                        ->map(fn($p) => "<p>$p</p>")
                        ->implode('')
        ];
    }
}
