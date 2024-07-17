<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Suplier;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@factory.com',
            'password' => Hash::make('admin'),
            'role' => 1
        ]);

        User::create([
            'name' => 'Purchase',
            'email' => 'purchase@factory.com',
            'password' => Hash::make('purchase'),
            'role' => 2
        ]);

        User::create([
            'name' => 'Karyawan',
            'email' => 'karyawan@factory.com',
            'password' => Hash::make('karyawan'),
            'role' => 3
        ]);

        Suplier::create([
            'name' => 'Supplier A',
            'notelp' => '081234567890',
            'alamat' => 'Jl. Raya Cibinong 1'
        ]);

        Suplier::create([
            'name' => 'Supplier B',
            'notelp' => '01234567890',
            'alamat' => 'Jl. Raya Cibinong 2'
        ]);

        Suplier::create([
            'name' => 'Supplier C',
            'notelp' => '0234567890',
            'alamat' => 'Jl. Raya Cibinong 3'
        ]);
    }
}
