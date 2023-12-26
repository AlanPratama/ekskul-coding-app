<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User::create([
        //     'name' => 'Admin',
        //     'phone' => '088888888888',
        //     'email' => 'admin@gmail.com',
        //     'username' => 'admin',
        //     'password' => Hash::make('admin'),
        //     'role_id' => 1
        // ]);

        for ($i=1; $i < 5; $i++) {
            User::create([
                'name' => 'Admin-'.$i,
                'phone' => '08888888888'.$i,
                'email' => $i.'admin@gmail.com',
                'username' => 'admin'.$i,
                'password' => Hash::make('admin'.$i),
                'role_id' => 1
            ]);
        }
    }
}
