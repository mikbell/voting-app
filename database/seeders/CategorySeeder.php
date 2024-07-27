<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [['name' => 'Categoria 1'], ['name' => 'Categoria 2'], ['name' => 'Categoria 3'], ['name' => 'Categoria 4']];

        Category::upsert($categories, ['name']);
    }
}
