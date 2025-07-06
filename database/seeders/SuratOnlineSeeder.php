<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SuratOnline;
use App\Models\User;
use Faker\Factory as Faker;

class SuratOnlineSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();
        $userIds = User::pluck('id')->toArray();
        $types = ['SKTM', 'Domisili', 'Usaha', 'Kematian', 'Nikah'];
        $statuses = ['diajukan', 'diproses', 'ditolak', 'selesai'];
        for ($i = 0; $i < 10; $i++) {
            SuratOnline::create([
                'user_id' => $faker->randomElement($userIds),
                'type' => $faker->randomElement($types),
                'status' => $faker->randomElement($statuses),
                'file_path' => $faker->filePath(),
                'keterangan' => $faker->sentence(8),
            ]);
        }
    }
} 