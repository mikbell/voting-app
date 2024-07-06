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
                'name' => 'Open',
                'classes' => 'bg-gray-200'
            ],
            [
                'name' => 'Considering',
                'classes' => 'bg-purple text-white'
            ],
            [
                'name' => 'In Progress',
                'classes' => 'bg-yellow text-white'
            ],
            [
                'name' => 'Implemented',
                'classes' => 'bg-green text-white'
            ],
            [
                'name' => 'Closed',
                'classes' => 'bg-red text-white'
            ]
        ];

        Status::upsert($statuses, ['name']);
    }
}
