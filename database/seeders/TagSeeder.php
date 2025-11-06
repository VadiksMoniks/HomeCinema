<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tags')->insert([
            ['name_en' => 'Action', 'name_ua' => 'Бойовик'],
            ['name_en' => 'Drama', 'name_ua' => 'Драма'],
            ['name_en' => 'Science Fiction', 'name_ua' => 'Научна фантастика'],
            ['name_en' => 'Thriller', 'name_ua' => 'Трилер'],
            ['name_en' => 'Adventure', 'name_ua' => 'Пригоди'],
            ['name_en' => 'Romance', 'name_ua' => 'Любовний'],
            ['name_en' => 'Fantasy', 'name_ua' => 'Фентезі'],
            ['name_en' => 'Crime', 'name_ua' => 'Злочин'],
            ['name_en' => 'Mystery', 'name_ua' => 'Містика'],
            ['name_en' => 'Horror', 'name_ua' => 'Жахи'],
            ['name_en' => 'Comedy', 'name_ua' => 'Комедія'],
            ['name_en' => 'Biography', 'name_ua' => 'Біографічний'],
            ['name_en' => 'War', 'name_ua' => 'Воєнний'],
            ['name_en' => 'Documentary', 'name_ua' => 'Документальний'],
        ]);
    }
}
