<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
 /**
  * Define the model's default state.
  *
  * @return array<string, mixed>
  */
 public function definition(): array
 {
  return [
   "title" => fake()->sentence(mt_rand(2, 3)),
   "slug" => fake()->slug(),
   "desc" => fake()->paragraph(),
   "images_id" => 1,
   "category_id" => mt_rand(1, 2),
   'price' => mt_rand(50, 150) * 1000,
  ];
 }
}
