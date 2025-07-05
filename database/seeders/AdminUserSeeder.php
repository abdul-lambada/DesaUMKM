<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create admin user
        $admin = User::firstOrCreate(
            ['email' => 'admin@desaumkm.com'],
            [
                'name' => 'Administrator',
                'password' => Hash::make('password'),
                'email_verified_at' => now(),
                'nik' => '0000000000000001',
                'phone' => '081234567800',
                'dusun' => 'Pusat',
            ]
        );

        // Assign admin role
        $admin->assignRole('admin');

        // Create kades user
        $kades = User::firstOrCreate(
            ['email' => 'kades@desaumkm.com'],
            [
                'name' => 'Kepala Desa',
                'password' => Hash::make('password'),
                'email_verified_at' => now(),
                'nik' => '0000000000000002',
                'phone' => '081234567801',
                'dusun' => 'Pusat',
            ]
        );

        // Assign kades role
        $kades->assignRole('kades');

        // Create sample warga user
        $warga = User::firstOrCreate(
            ['email' => 'warga@desaumkm.com'],
            [
                'name' => 'Warga Sample',
                'password' => Hash::make('password'),
                'email_verified_at' => now(),
                'nik' => '1234567890123456',
                'phone' => '081234567890',
                'dusun' => 'Dusun 1',
            ]
        );

        // Assign warga role
        $warga->assignRole('warga');

        // Create sample UMKM user
        $umkm = User::firstOrCreate(
            ['email' => 'umkm@desaumkm.com'],
            [
                'name' => 'UMKM Sample',
                'password' => Hash::make('password'),
                'email_verified_at' => now(),
                'nik' => '1234567890123457',
                'phone' => '081234567891',
                'dusun' => 'Dusun 2',
            ]
        );

        // Assign umkm role
        $umkm->assignRole('umkm');
    }
} 