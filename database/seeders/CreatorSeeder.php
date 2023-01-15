<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CreatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('creators')->insert([
            [
                'name'=> 'LightSpeed Studio',
                'date_of_starting'=>'2008-09-22'
            ],
            [
                'name'=> ' Rockstar Games',
                'date_of_starting'=>'1998-12-12'
            ],
            [
                'name'=> 'Playrix',
                'date_of_starting'=>'2004-12-14'
            ],
            [
                'name'=> 'TEAMWORK',
                'date_of_starting'=>'2007-01-16'
            ],
            [
                'name'=> 'Behaviour Interactive',
                'date_of_starting'=>'1992-09-21'
            ],
            [
                'name'=> 'SYBO Games',
                'date_of_starting'=>'2010-10-01'
            ],
            [
                'name'=> 'Supercell',
                'date_of_starting'=>'2010-06-09'
            ],
            [
                'name'=> 'Capcom Production',
                'date_of_starting'=>'1979-05-30'
            ],
            [
                'name'=> 'Electronic Arts',
                'date_of_starting'=>'1982-05-27'
            ],
            [
                'name'=> 'XS Software',
                'date_of_starting'=>'2004-03-29'
            ],
        ]);
    }
}
