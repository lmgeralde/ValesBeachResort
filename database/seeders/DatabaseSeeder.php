<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create an Admin user
        User::create([
            'name' => 'Admin',
            'email' => 'admin@valesresort.com',
            'password' => Hash::make('admin123'),
            'is_admin' => 1,
        ]);

        // Create a Staff user
        User::create([
            'name' => 'Staff',
            'email' => 'staff@gmail.com',
            'password' => Hash::make('111'),
            'is_staff' => 1,
        ]);

        // Create a regular user
        User::create([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'password' => Hash::make('111'),
        ]);
    }
}
