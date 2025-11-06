<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilmTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('film_person')->insert([
            ['film_id' => 1, 'tag_id' => 1],
            ['film_id' => 1, 'tag_id' => 6],
            ['film_id' => 1, 'tag_id' => 9],

            ['film_id' => 2, 'tag_id' => 2],
            ['film_id' => 2, 'tag_id' => 3],
            ['film_id' => 2, 'tag_id' => 1],
            ['film_id' => 2, 'tag_id' => 10],

            ['film_id' => 3, 'tag_id' => 3],
            ['film_id' => 3, 'tag_id' => 2],

            ['film_id' => 4, 'tag_id' => 4],
            ['film_id' => 4, 'tag_id' => 5],
            ['film_id' => 4, 'tag_id' => 7],

            ['film_id' => 5, 'tag_id' => 5],
            ['film_id' => 5, 'tag_id' => 9],

            ['film_id' => 6, 'tag_id' => 6],
            ['film_id' => 6, 'tag_id' => 8],
            ['film_id' => 6, 'tag_id' => 13],

            ['film_id' => 7, 'tag_id' => 7],
            ['film_id' => 7, 'tag_id' => 5],
            ['film_id' => 7, 'tag_id' => 2],

            ['film_id' => 8, 'tag_id' => 8],
            ['film_id' => 8, 'tag_id' => 2],
            ['film_id' => 8, 'tag_id' => 1],

            ['film_id' => 9, 'tag_id' => 9],
            ['film_id' => 9, 'tag_id' => 10],
            ['film_id' => 9, 'tag_id' => 12],

            ['film_id' => 10, 'tag_id' => 10],
            ['film_id' => 10, 'tag_id' => 14],
            ['film_id' => 10, 'tag_id' => 11],

            ['film_id' => 11, 'tag_id' => 11],
            ['film_id' => 11, 'tag_id' => 4],
            ['film_id' => 11, 'tag_id' => 7],

            ['film_id' => 12, 'tag_id' => 12],
            ['film_id' => 12, 'tag_id' => 3],
            ['film_id' => 12, 'tag_id' => 5],
        ]);
    }
}
