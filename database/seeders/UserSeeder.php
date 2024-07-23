<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Creare un utente con credenziali specifiche
        User::factory()->create([
            'name' => 'admin',
            'email' => 'a@a.com',
            'password' => bcrypt('asdf'),
        ]);
    }
}
