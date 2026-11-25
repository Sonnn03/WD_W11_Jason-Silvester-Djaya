<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Jason',
            'email' => 'jason@gmail.com',
        ]);

        User::factory()->create([
            'name' => 'Chris',
            'email' => 'chris@gmail.com',
        ]);

        User::factory()->create([
            'name' => 'Kevin',
            'email' => 'kevin@gmail.com',
        ]);
    }
}