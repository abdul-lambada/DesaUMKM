<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Umkm;
use App\Models\User;
use Faker\Factory as Faker;

class UmkmSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();
        $userIds = User::pluck('id')->toArray();
        $categories = ['kuliner', 'kerajinan', 'jasa', 'pertanian'];
        $legalStatuses = ['resmi', 'belum_resmi'];
        $statuses = ['aktif', 'tidak_aktif'];
        for ($i = 0; $i < 10; $i++) {
            Umkm::create([
                'user_id' => $faker->randomElement($userIds),
                'name' => $faker->company.' UMKM',
                'category' => $faker->randomElement($categories),
                'nib' => $faker->numerify('################'),
                'legal_status' => $faker->randomElement($legalStatuses),
                'address' => $faker->address,
                'description' => $faker->paragraph(3),
                'logo' => $faker->imageUrl(200, 200, 'umkm', true),
                'status' => $faker->randomElement($statuses),
            ]);
        }
    }
} 