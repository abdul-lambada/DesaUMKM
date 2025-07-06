<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Event;
use Faker\Factory as Faker;

class EventSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();
        $types = ['budaya', 'keagamaan', 'umkm', 'umum'];
        for ($i = 0; $i < 10; $i++) {
            Event::create([
                'title' => $faker->sentence(4),
                'description' => $faker->paragraph(3),
                'date' => $faker->dateTimeBetween('-1 year', '+1 year'),
                'location' => $faker->city,
                'type' => $faker->randomElement($types),
                'image' => $faker->imageUrl(640, 480, 'event', true),
            ]);
        }
    }
} 