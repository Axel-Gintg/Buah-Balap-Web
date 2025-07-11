<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'customer_demo',
            'notelp' => '081234567890',
            'email' => 'customer_demo@example.com',
            'alamat' => 'Alamat Customer Demo',
            'password' => Hash::make('password123'),
            'role' => 3, // 3 = customer
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
} 