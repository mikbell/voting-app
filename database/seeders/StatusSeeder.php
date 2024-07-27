<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $statuses = [
            [
                'name' => 'Aperto',
                'classes' => 'bg-gray-200'
            ],
            [
                'name' => 'In Considerazione',
                'classes' => 'bg-purple text-white'
            ],
            [
                'name' => 'In progresso',
                'classes' => 'bg-yellow text-white'
            ],
            [
                'name' => 'Implementato',
                'classes' => 'bg-green text-white'
            ],
            [
                'name' => 'Chiuso',
                'classes' => 'bg-red text-white'
            ]
        ];

        Status::upsert($statuses, ['name']);
    }
}
