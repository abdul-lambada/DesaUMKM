<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MapPoint;
use Faker\Factory as Faker;

class MapPointSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();
        $types = ['umkm', 'wisata', 'layanan', 'event'];
        for ($i = 0; $i < 10; $i++) {
            MapPoint::create([
                'title' => $faker->sentence(3),
                'type' => $faker->randomElement($types),
                'lat' => $faker->latitude(-7.5, -7.0),
                'lng' => $faker->longitude(110.0, 111.0),
                'related_id' => null,
            ]);
        }
    }
} 