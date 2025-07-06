<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Umkm;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();
        $umkmIds = Umkm::pluck('id')->toArray();
        for ($i = 0; $i < 10; $i++) {
            Product::create([
                'umkm_id' => $faker->randomElement($umkmIds),
                'name' => $faker->word.' Product',
                'description' => $faker->paragraph(3),
                'price' => $faker->randomFloat(2, 10000, 1000000),
                'stock' => $faker->numberBetween(1, 100),
                'discount' => $faker->randomFloat(2, 0, 50),
                'available' => $faker->boolean(80),
                'image' => $faker->imageUrl(640, 480, 'product', true),
            ]);
        }
    }
} 