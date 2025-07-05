<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create Admin user
        $admin = User::firstOrCreate(
            ['email' => 'admin@desaumkm.com'],
            [
                'name' => 'Administrator',
                'password' => Hash::make('password'),
                'role' => 'admin',
                'nik' => '1234567890123456',
                'dusun' => 'Dusun Admin',
                'phone' => '081234567890',
            ]
        );
        $admin->assignRole('admin');

        // Create Kades user
        $kades = User::firstOrCreate(
            ['email' => 'kades@desaumkm.com'],
            [
                'name' => 'Kepala Desa',
                'password' => Hash::make('password'),
                'role' => 'kades',
                'nik' => '1234567890123457',
                'dusun' => 'Dusun Kades',
                'phone' => '081234567891',
            ]
        );
        $kades->assignRole('kades');

        // Create Warga user
        $warga = User::firstOrCreate(
            ['email' => 'warga@desaumkm.com'],
            [
                'name' => 'Warga Desa',
                'password' => Hash::make('password'),
                'role' => 'warga',
                'nik' => '1234567890123458',
                'dusun' => 'Dusun Warga',
                'phone' => '081234567892',
            ]
        );
        $warga->assignRole('warga');

        // Create UMKM user
        $umkm = User::firstOrCreate(
            ['email' => 'umkm@desaumkm.com'],
            [
                'name' => 'Pemilik UMKM',
                'password' => Hash::make('password'),
                'role' => 'umkm',
                'nik' => '1234567890123459',
                'dusun' => 'Dusun UMKM',
                'phone' => '081234567893',
            ]
        );
        $umkm->assignRole('umkm');

        // Create Pengunjung user
        $pengunjung = User::firstOrCreate(
            ['email' => 'pengunjung@desaumkm.com'],
            [
                'name' => 'Pengunjung',
                'password' => Hash::make('password'),
                'role' => 'pengunjung',
                'nik' => '1234567890123460',
                'dusun' => 'Dusun Pengunjung',
                'phone' => '081234567894',
            ]
        );
        $pengunjung->assignRole('pengunjung');
    }
}
