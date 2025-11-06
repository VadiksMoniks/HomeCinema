<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('films')->insert([
            [
                'name_en' => 'Keanu Reeves',
                'name_ua' => 'Кіану Рівз',
                'type' => 'Actor',
                'photo' => 'Keanu-Reeves.jpg',
            ],
            [
                'name_en' => 'Carrie-Anne Moss',
                'name_ua' => 'Керрі-Енн Мосс',
                'type' => 'Actor',
                'photo' => 'Carrie-Anne-Moss.jpg',
            ],
            [
                'name_en' => 'Laurence Fishburne',
                'name_ua' => 'Лоренс Фішберн',
                'type' => 'Actor',
                'photo' => 'Laurence-Fishburne.jpg',
            ],
            [
                'name_en' => 'Christopher Nolan',
                'name_ua' => 'Крістофер Нолан',
                'type' => 'Director',
                'photo' => 'Christopher-Nolan.jpg',
            ],
            [
                'name_en' => 'Leonardo DiCaprio',
                'name_ua' => 'Леонардо Ді Капріо',
                'type' => 'Actor',
                'photo' => 'Leonardo-DiCaprio.jpg',
            ],
            [
                'name_en' => 'Hans Zimmer',
                'name_ua' => 'Ганс Ціммер',
                'type' => 'Composer',
                'photo' => 'Hans-Zimmer.jpg',
            ],
            [
                'name_en' => 'Quentin Tarantino',
                'name_ua' => 'Квентін Тарантіно',
                'type' => 'Director',
                'photo' => 'Quentin-Tarantino.jpg',
            ],
            [
                'name_en' => 'Brad Pitt',
                'name_ua' => 'Бред Пітт',
                'type' => 'Actor',
                'photo' => 'Brad-Pitt.jpg',
            ],
            [
                'name_en' => 'Natalie Portman',
                'name_ua' => 'Наталі Портман',
                'type' => 'Actor',
                'photo' => 'Natalie-Portman.jpg',
            ],
            [
                'name_en' => 'David Fincher',
                'name_ua' => 'Девід Фінчер',
                'type' => 'Director',
                'photo' => 'David-Fincher.jpg',
            ],
            [
                'name_en' => 'Lana Wachowski',
                'name_ua' => 'Лана Вачовскі',
                'type' => 'Writer',
                'photo' => 'Lana-Wachowski.jpg',
            ],
            [
                'name_en' => 'Lilly Wachowski',
                'name_ua' => 'Ліллі Вачовскі',
                'type' => 'Writer',
                'photo' => 'Lilly-Wachowski.jpg',
            ],
        ]);
    }
}
