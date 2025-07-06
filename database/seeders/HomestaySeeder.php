<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Homestay;
use Faker\Factory as Faker;

class HomestaySeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();
        $statuses = ['tersedia', 'penuh'];
        for ($i = 0; $i < 10; $i++) {
            Homestay::create([
                'name' => $faker->company.' Homestay',
                'description' => $faker->paragraph(3),
                'address' => $faker->address,
                'price_per_night' => $faker->randomFloat(2, 100000, 1000000),
                'contact' => $faker->phoneNumber,
                'image' => $faker->imageUrl(640, 480, 'homestay', true),
                'status' => $faker->randomElement($statuses),
            ]);
        }
    }
} 