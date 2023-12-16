<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $body = fake()->paragraph();
        return [
            "title" => fake()->sentence(mt_rand(2, 3)),
            "slug" => fake()->slug(),
            "body" => $body,
            "excerpt" => substr($body, 0, 20),
            "image" => "blog/b1.jpg",
            "published_at" => now(),
            // 'price' => mt_rand(50, 150) * 1000,
        ];
    }
}
