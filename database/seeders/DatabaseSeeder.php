<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImages;
use App\Models\SizeChart;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        ProductImages::factory()->create([

            "image1" => "products/f1.jpg",
            "image2" => "products/f2.jpg",
            "image3" => "products/f3.jpg",
            "image4" => "products/f4.jpg",
            //  "image5" => "products/f5.jpg",
        ]);

        User::factory(2)->create();
        Product::factory(100)->create();
        SizeChart::factory()->create([
            "name" => "Oversized",
            "image" => "size/s1.jpeg",
        ]);

        SizeChart::factory()->create([
            "name" => "Crop Top",
            "image" => "size/c1.png",
        ]);

        Category::factory()->create([
            'name' => 'Oversized T-Shirt',
            "slug" => "oversized-t-shirt",
            'size_id' => 1,
        ]);

        Category::factory()->create([
            'name' => 'Crop Top',
            "slug" => "crop-top",
            "size_id" => 2,
        ]);

        Blog::factory(10)->create();
    }
}
