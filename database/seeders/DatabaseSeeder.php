<?php

namespace Database\Seeders;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'email' => 'example@mail.com',
            'username' => 'rani',
            'password' => Hash::make('12345'),
            'role' => '0'
        ]);
        
        User::create([
            'email' => 'example12@mail.com',
            'username' => 'admin',
            'password' => Hash::make('12345'),
            'role' =>'1',
        ]);
    }
}
