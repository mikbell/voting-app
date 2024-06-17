<?php

namespace Database\Seeders;

use App\Models\Idea;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Status;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Database\Seeders\StatusSeeder;
use Database\Seeders\CategorySeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(CategorySeeder::class);
        $this->call(StatusSeeder::class);

        
        Idea::factory(30)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
