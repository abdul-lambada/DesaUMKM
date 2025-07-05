<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create permissions
        $permissions = [
            // User management
            'view users',
            'create users',
            'edit users',
            'delete users',
            
            // UMKM management
            'view umkm',
            'create umkm',
            'edit umkm',
            'delete umkm',
            'manage own umkm',
            
            // Product management
            'view products',
            'create products',
            'edit products',
            'delete products',
            'manage own products',
            
            // Order management
            'view orders',
            'create orders',
            'edit orders',
            'delete orders',
            'manage own orders',
            
            // Tourism management
            'view wisata',
            'create wisata',
            'edit wisata',
            'delete wisata',
            
            // Homestay management
            'view homestays',
            'create homestays',
            'edit homestays',
            'delete homestays',
            
            // Booking management
            'view bookings',
            'create bookings',
            'edit bookings',
            'delete bookings',
            'manage own bookings',
            
            // Event management
            'view events',
            'create events',
            'edit events',
            'delete events',
            
            // Surat Online management
            'view surat online',
            'create surat online',
            'edit surat online',
            'delete surat online',
            'manage own surat online',
            
            // Community Groups
            'view community groups',
            'create community groups',
            'edit community groups',
            'delete community groups',
            
            // Gallery management
            'view galleries',
            'create galleries',
            'edit galleries',
            'delete galleries',
            
            // Article management
            'view articles',
            'create articles',
            'edit articles',
            'delete articles',
            'manage own articles',
            
            // Feedback management
            'view feedbacks',
            'create feedbacks',
            'edit feedbacks',
            'delete feedbacks',
            'manage own feedbacks',
            
            // Map Points
            'view map points',
            'create map points',
            'edit map points',
            'delete map points',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        // Create roles
        $roles = [
            'admin' => $permissions, // Admin has all permissions
            'kades' => $permissions, // Kades has all permissions
            'warga' => [
                'view umkm',
                'view products',
                'create orders',
                'view orders',
                'edit orders',
                'view wisata',
                'create bookings',
                'view bookings',
                'edit bookings',
                'view events',
                'create surat online',
                'view surat online',
                'view community groups',
                'view galleries',
                'view articles',
                'create feedbacks',
                'view feedbacks',
                'view map points',
            ],
            'umkm' => [
                'view umkm',
                'manage own umkm',
                'view products',
                'manage own products',
                'view orders',
                'view wisata',
                'view events',
                'view community groups',
                'view galleries',
                'view articles',
                'create feedbacks',
                'view feedbacks',
                'view map points',
            ],
            'pengunjung' => [
                'view umkm',
                'view products',
                'create orders',
                'view orders',
                'view wisata',
                'create bookings',
                'view bookings',
                'view events',
                'view community groups',
                'view galleries',
                'view articles',
                'create feedbacks',
                'view feedbacks',
                'view map points',
            ],
        ];

        foreach ($roles as $roleName => $rolePermissions) {
            $role = Role::firstOrCreate(['name' => $roleName]);
            $role->givePermissionTo($rolePermissions);
        }
    }
}
