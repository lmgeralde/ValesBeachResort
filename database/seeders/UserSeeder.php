<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create Admin User
        User::create([
            'name' => 'Admin',
            'email' => 'admin@valesresort.com',
            'password' => Hash::make('password'),
            'role' => 'Admin',
            'email_verified_at' => now(),
        ]);

        // Create Staff User
        User::create([
            'name' => 'Staff',
            'email' => 'staff@valesresort.com',
            'password' => Hash::make('password'),
            'role' => 'Staff',
            'email_verified_at' => now(),
        ]);
    }
}