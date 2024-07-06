<?php

namespace Database\Seeders;

use App\Models\Idea;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Vote;
use App\Models\Login;
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

        // Numero di utenti da creare
        $numberOfUsers = 15;
        // Numero di login per utente
        $numberOfLoginsPerUser = 500;

        // Creare gli utenti
        $users = User::factory($numberOfUsers)->create();

        // Creare il numero specificato di login per ogni utente
        $users->each(function ($user) use ($numberOfLoginsPerUser) {
            for ($i = 0; $i < $numberOfLoginsPerUser; $i++) {
                Login::factory()->create([
                    'user_id' => $user->id,
                ]);
            }
        });

        // Creare un utente con credenziali specifiche
        $admin = User::factory()->create([
            'name' => 'admin',
            'email' => 'a@a.com',
            'password' => bcrypt('asdf'), // Ricorda di usare bcrypt per la password
        ]);

        // Creare il numero specificato di login per l'utente speciale
        for ($i = 0; $i < $numberOfLoginsPerUser; $i++) {
            Login::factory()->create([
                'user_id' => $admin->id,
            ]);
        }

        // Creare le idee, assicurandosi che user_id siano validi
        $users->each(function ($user) {
            Idea::factory(2000 / 16)->create(['user_id' => $user->id]);
        });

        Idea::factory(2000 / 16)->create(['user_id' => $admin->id]);

        // Creare voti per le idee
        foreach (range(1, $numberOfUsers + 1) as $user_id) {
            foreach (range(1, 2000) as $idea_id) {
                if ($idea_id % 2 === 0) {
                    Vote::factory()->create([
                        'user_id' => $user_id,
                        'idea_id' => $idea_id,
                    ]);
                }
            }
        }
    }

}
