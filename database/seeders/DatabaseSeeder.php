<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

Product::create(['name' => 'Nike Air Max', 'price' => 120, 'image' => 'nike.jpg']);
Product::create(['name' => 'Adidas Ultra Boost', 'price' => 150, 'image' => 'adidas.jpg']);


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
