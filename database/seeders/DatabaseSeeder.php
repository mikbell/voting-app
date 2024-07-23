<?php

namespace Database\Seeders;

use Carbon\Carbon;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Idea;
use App\Models\User;
use App\Models\Vote;
use App\Models\Login;
use App\Models\Comment;
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
        $this->call([CategorySeeder::class, StatusSeeder::class, UserSeeder::class]);

        // Numero di utenti da creare
        $numberOfUsers = 50;

        // Creare gli utenti
        $users = User::factory($numberOfUsers)->create();

        // Creare le idee, assicurandosi che user_id siano validi
        $users->each(function ($user) {
            Idea::factory(5)->create(['user_id' => $user->id]);
        });

        // Ottieni tutti gli ID delle idee
        $ideaIds = Idea::all()->pluck('id')->toArray();

        // Creare voti per le idee
        foreach (range(1, $numberOfUsers + 1) as $user_id) {
            foreach ($ideaIds as $idea_id) {
                // Genera un numero casuale tra 0 e 1
                $shouldVote = rand(0, 1);

                // Se il numero casuale è 1, crea un voto
                if ($shouldVote === 1) {
                    Vote::factory()->create([
                        'user_id' => $user_id,
                        'idea_id' => $idea_id,
                    ]);
                }
            }
        }

        foreach(Idea::all() as $idea){
            Comment::factory(5)->existing()->create(['idea_id' => $idea->id]);
        }
    }

}
