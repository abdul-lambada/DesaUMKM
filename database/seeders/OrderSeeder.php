<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;
use App\Models\User;
use App\Models\Product;
use Faker\Factory as Faker;

class OrderSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();
        $userIds = User::pluck('id')->toArray();
        $productIds = Product::pluck('id')->toArray();
        $statuses = ['pending', 'diproses', 'selesai', 'dibatalkan'];
        for ($i = 0; $i < 10; $i++) {
            $quantity = $faker->numberBetween(1, 5);
            $productId = $faker->randomElement($productIds);
            $product = Product::find($productId);
            $totalPrice = $product ? $product->price * $quantity : $faker->randomFloat(2, 10000, 100000);
            Order::create([
                'user_id' => $faker->randomElement($userIds),
                'product_id' => $productId,
                'quantity' => $quantity,
                'total_price' => $totalPrice,
                'status' => $faker->randomElement($statuses),
            ]);
        }
    }
} 