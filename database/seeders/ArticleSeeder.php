<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;
use App\Models\User;
use Faker\Factory as Faker;

class ArticleSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();
        $userIds = User::pluck('id')->toArray();
        $categories = ['berita', 'tips', 'pengumuman'];
        for ($i = 0; $i < 10; $i++) {
            Article::create([
                'user_id' => $faker->randomElement($userIds),
                'title' => $faker->sentence(6),
                'content' => $faker->paragraph(5),
                'image' => $faker->imageUrl(640, 480, 'article', true),
                'category' => $faker->randomElement($categories),
                'published_at' => $faker->dateTimeBetween('-1 year', 'now'),
            ]);
        }
    }
} 