<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Wisata;
use Faker\Factory as Faker;

class WisataSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 0; $i < 10; $i++) {
            Wisata::create([
                'name' => $faker->company.' Wisata',
                'description' => $faker->paragraph(3),
                'location' => $faker->city,
                'ticket_price' => $faker->randomFloat(2, 10000, 50000),
                'open_hours' => $faker->randomElement(['08:00-17:00', '09:00-18:00', '07:00-16:00']),
                'facilities' => $faker->sentence(8),
                'rating' => $faker->randomFloat(2, 3, 5),
                'lat' => $faker->latitude(-7.5, -7.0),
                'lng' => $faker->longitude(110.0, 111.0),
                'image' => $faker->imageUrl(640, 480, 'wisata', true),
            ]);
        }
    }
} 