<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Product::create([
        //     'title' => 'My Product 1',
        //     'slug' => 'my-product-1',
        //     'category' => 'Category 1',
        //     'description' => 'Description 1',
        //     'price' => 100,
        //     'stock' => 10,
        // ]);


        Product::factory()->count(5000)->create();
    }
}
