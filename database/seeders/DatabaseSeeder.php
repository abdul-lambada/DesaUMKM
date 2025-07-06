<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            // RoleSeeder::class,
            // AdminUserSeeder::class,
            // UserSeeder::class,
            UmkmSeeder::class,
            ProductSeeder::class,
            OrderSeeder::class,
            HomestaySeeder::class,
            WisataSeeder::class,
            EventSeeder::class,
            CommunityGroupSeeder::class,
            GallerySeeder::class,
            ArticleSeeder::class,
            BookingSeeder::class,
            FeedbackSeeder::class,
            MapPointSeeder::class,
            SuratOnlineSeeder::class,
        ]);
    }
}
