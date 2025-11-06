<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagPersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('film_person')->insert([
            ['tag_id' => 1, 'person_id' => 1],
            ['tag_id' => 2, 'person_id' => 2],
            ['tag_id' => 3, 'person_id' => 3],
            ['tag_id' => 4, 'person_id' => 4],
            ['tag_id' => 5, 'person_id' => 5],
            ['tag_id' => 6, 'person_id' => 6],
            ['tag_id' => 7, 'person_id' => 7],
            ['tag_id' => 8, 'person_id' => 8],
            ['tag_id' => 9, 'person_id' => 9],
            ['tag_id' => 10, 'person_id' => 10],
            ['tag_id' => 11, 'person_id' => 11],
            ['tag_id' => 12, 'person_id' => 12],
        ]);
    }
}
