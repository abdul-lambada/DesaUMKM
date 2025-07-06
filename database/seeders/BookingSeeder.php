<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Booking;
use App\Models\User;
use App\Models\Homestay;
use Faker\Factory as Faker;

class BookingSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();
        $userIds = User::pluck('id')->toArray();
        $homestayIds = Homestay::pluck('id')->toArray();
        $statuses = ['pending', 'dikonfirmasi', 'selesai', 'batal'];
        for ($i = 0; $i < 10; $i++) {
            $checkIn = $faker->dateTimeBetween('-1 month', '+1 month');
            $checkOut = (clone $checkIn)->modify('+'.rand(1,5).' days');
            Booking::create([
                'user_id' => $faker->randomElement($userIds),
                'homestay_id' => $faker->randomElement($homestayIds),
                'check_in' => $checkIn,
                'check_out' => $checkOut,
                'total_price' => $faker->randomFloat(2, 100000, 1000000),
                'status' => $faker->randomElement($statuses),
            ]);
        }
    }
} 