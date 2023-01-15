<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
            [
                'name'=>' Battle royale',
            ],
            [
                'name'=>'Action-adventure',
            ],
            [
                'name'=>'Casual',
            ],
            [
                'name'=>'Survival horror',
            ],
            [
                'name'=>'Endless runner',
            ],
            [
                'name'=>'Real-time strategy',
            ],
            [
                'name'=>'Sports',
            ],
        ]);
    }
}
