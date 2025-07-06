<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CommunityGroup;
use Faker\Factory as Faker;

class CommunityGroupSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();
        $types = ['karang_taruna', 'pokdarwis', 'kelompok_tani'];
        for ($i = 0; $i < 10; $i++) {
            CommunityGroup::create([
                'name' => $faker->company,
                'type' => $faker->randomElement($types),
                'description' => $faker->paragraph(3),
                'leader_name' => $faker->name,
                'phone' => $faker->phoneNumber,
                'logo' => $faker->imageUrl(200, 200, 'logo', true),
            ]);
        }
    }
} 