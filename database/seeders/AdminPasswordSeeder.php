<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminPasswordSeeder extends Seeder
{
    public function run()
    {
        User::where('email', 'admin@valesresort.com')->update([
            'password' => Hash::make('admin123')
        ]);
    }
}
