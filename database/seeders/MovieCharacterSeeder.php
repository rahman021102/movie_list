<?php

namespace Database\Seeders;

use App\Models\MovieCharacter;
use Illuminate\Database\Seeder;

class MovieCharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MovieCharacter::create([
            'movie_id' => 1,
            'actor_id' => 1,
            'character_name' => 'Jake Sully'
        ]);

        MovieCharacter::create([
            'movie_id' => 1,
            'actor_id' => 2,
            'character_name' => 'Neytiri'
        ]);

        MovieCharacter::create([
            'movie_id' => 1,
            'actor_id' => 3,
            'character_name' => 'Colonel Miles Quaritch'
        ]);

        MovieCharacter::create([
            'movie_id' => 2,
            'actor_id' => 4,
            'character_name' => 'Doraemon'
        ]);

        MovieCharacter::create([
            'movie_id' => 2,
            'actor_id' => 5,
            'character_name' => 'Nobita Nobi'
        ]);

        MovieCharacter::create([
            'movie_id' => 2,
            'actor_id' => 6,
            'character_name' => 'Shizuka Minamoto'
        ]);

        MovieCharacter::create([
            'movie_id' => 3,
            'actor_id' => 7,
            'character_name' => 'Black Adam'
        ]);

        MovieCharacter::create([
            'movie_id' => 3,
            'actor_id' => 8,
            'character_name' => 'Hawkman'
        ]);

        MovieCharacter::create([
            'movie_id' => 3,
            'actor_id' => 9,
            'character_name' => 'Doctor Fate'
        ]);

        MovieCharacter::create([
            'movie_id' => 4,
            'actor_id' => 10,
            'character_name' => 'Top ittipat'
        ]);

        MovieCharacter::create([
            'movie_id' => 4,
            'actor_id' => 11,
            'character_name' => 'Lin'
        ]);

        MovieCharacter::create([
            'movie_id' => 4,
            'actor_id' => 12,
            'character_name' => 'Uncle'
        ]);

        MovieCharacter::create([
            'movie_id' => 5,
            'actor_id' => 13,
            'character_name' => 'Woo-jin'
        ]);

        MovieCharacter::create([
            'movie_id' => 5,
            'actor_id' => 14,
            'character_name' => 'Im Soo-ah'
        ]);

        MovieCharacter::create([
            'movie_id' => 5,
            'actor_id' => 15,
            'character_name' => 'Ji-Ho'
        ]);

        MovieCharacter::create([
            'movie_id' => 6,
            'actor_id' => 16,
            'character_name' => 'Indiana Jones'
        ]);

        MovieCharacter::create([
            'movie_id' => 6,
            'actor_id' => 17,
            'character_name' => 'Mutt Williams'
        ]);

        MovieCharacter::create([
            'movie_id' => 6,
            'actor_id' => 18,
            'character_name' => 'Irina Spalko'
        ]);

        MovieCharacter::create([
            'movie_id' => 7,
            'actor_id' => 18,
            'character_name' => 'President Soekarno '
        ]);

        MovieCharacter::create([
            'movie_id' => 7,
            'actor_id' => 20,
            'character_name' => 'Hatta'
        ]);

        MovieCharacter::create([
            'movie_id' => 7,
            'actor_id' => 21,
            'character_name' => 'Fatmawati'
        ]);

        MovieCharacter::create([
            'movie_id' => 8,
            'actor_id' => 22,
            'character_name' => 'Bossman'
        ]);

        MovieCharacter::create([
            'movie_id' => 8,
            'actor_id' => 23,
            'character_name' => 'Norah Sikkin'
        ]);

        MovieCharacter::create([
            'movie_id' => 8,
            'actor_id' => 24,
            'character_name' => 'Diana'
        ]);

        MovieCharacter::create([
            'movie_id' => 9,
            'actor_id' => 28,
            'character_name' => 'Pi Patel'
        ]);

        MovieCharacter::create([
            'movie_id' => 9,
            'actor_id' => 29,
            'character_name' => 'Santosh Patel'
        ]);

        MovieCharacter::create([
            'movie_id' => 9,
            'actor_id' => 30,
            'character_name' => 'Gita Patel'
        ]);

        MovieCharacter::create([
            'movie_id' => 10,
            'actor_id' => 25,
            'character_name' => 'Michael jackson'
        ]);

        MovieCharacter::create([
            'movie_id' => 10,
            'actor_id' => 26,
            'character_name' => 'Michael Bearden'
        ]);

        MovieCharacter::create([
            'movie_id' => 10,
            'actor_id' => 27,
            'character_name' => 'Judith Hill'
        ]);
    }
}