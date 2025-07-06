<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Feedback;
use App\Models\User;
use Faker\Factory as Faker;

class FeedbackSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();
        $userIds = User::pluck('id')->toArray();
        $categories = ['aspirasi', 'kritik', 'pengaduan'];
        $statuses = ['belum_dibaca', 'diproses', 'selesai'];
        for ($i = 0; $i < 10; $i++) {
            Feedback::create([
                'user_id' => $faker->randomElement($userIds),
                'message' => $faker->sentence(10),
                'category' => $faker->randomElement($categories),
                'status' => $faker->randomElement($statuses),
            ]);
        }
    }
} 