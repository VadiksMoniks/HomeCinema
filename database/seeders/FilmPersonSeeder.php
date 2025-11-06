<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilmPersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('film_person')->insert([
            ['film_id' => 1, 'person_id' => 1],
            ['film_id' => 2, 'person_id' => 2],
            ['film_id' => 3, 'person_id' => 3],
            ['film_id' => 4, 'person_id' => 4],
            ['film_id' => 5, 'person_id' => 5],
            ['film_id' => 6, 'person_id' => 6],
            ['film_id' => 7, 'person_id' => 7],
            ['film_id' => 8, 'person_id' => 8],
            ['film_id' => 9, 'person_id' => 9],
            ['film_id' => 10, 'person_id' => 10],
            ['film_id' => 11, 'person_id' => 11],
            ['film_id' => 12, 'person_id' => 12],
        ]);
    }
}
