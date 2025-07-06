<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Gallery;
use App\Models\User;
use Faker\Factory as Faker;

class GallerySeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();
        $userIds = User::pluck('id')->toArray();
        $categories = ['umkm', 'wisata', 'event', 'desa'];
        for ($i = 0; $i < 10; $i++) {
            Gallery::create([
                'title' => $faker->sentence(3),
                'category' => $faker->randomElement($categories),
                'image_path' => $faker->imageUrl(640, 480, 'gallery', true),
                'uploaded_by' => $faker->randomElement($userIds),
            ]);
        }
    }
} 