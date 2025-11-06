<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('admins')->insert(['username' => 'admin', 'password' => '$2y$10$cbl1r6/xEI2Pd/bMeOIUau2PYPoLFFkWc9v/VCT.StxLrxyRugxzu']);
    }
}
