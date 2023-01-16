<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    DB::table('games')->insert([
        ['name'=>'PUBG',
        'description'=>'PUBG is a versus player shooter game in which up to one hundred players fight in a battle royale, a type of large-scale last man standing deathmatch where players fight to remain the last alive.',
        'year' => '2017-03-27',
        'genre_id'=>'1',
        'creator_id'=> '1',
        'image' => 'fontend/assets/gamesimg/PUBG-PC.jpg',
            ],
        ['name'=>'GTA',
            'description'=>'The story of three uniquely-different criminals as they commit daring and profitable heists across the sprawling city of Los Santos. ',
            'year' => '2013-09-17',
            'genre_id'=>'2',
            'creator_id'=> '2',
            'image' => 'fontend/assets/gamesimg/gta',

        ],
        ['name'=>'Homescapes',
            'description'=>'The storyline narrates about attempts of the games protagonist, Austin the Butler, to restore his childhood home.',
            'year' => '2017-07-26',
            'genre_id'=>'3',
            'creator_id'=> '3',
            'image' => 'fontend/assets/gamesimg/homscapes',

        ],
        ['name'=>'Fireboy and Watergirl',
            'description'=>'Fireboy must avoid the water and Watergirl must avoid the fire, and be careful, the green mud kills them both! You can collect diamonds for extra points!',
            'year' => '2009-11-19',
            'genre_id'=>'2',
            'creator_id'=> '4',
            'image' => 'fontend/assets/gamesimg/fireboywatergiril.png',

        ],
        ['name'=>'DEAD BY DAYLIGHT',
            'description'=>'Dead by Daylight is a horror game where one player takes on the role of the savage Killer.',
            'year' => '2016-06-14',
            'genre_id'=>'4',
            'creator_id'=> '5',
            'image' => 'fontend/assets/gamesimg/dbdl.jpg',

        ],
        ['name'=>'Garden Affairs',
            'description'=>'Beat clever Match-3 levels with incredible boosters to decorate the mansion of your dreams, foster adorable pets, and unlock new chapters of the exciting story! ',
            'year' => '2019-07-22',
            'genre_id'=>'3',
            'creator_id'=> '3',
            'image' => 'fontend/assets/gamesimg/gardenafairs.jpg',

        ],
        ['name'=>'Subway Surf',
            'description'=>'The aim of the game is to outrun a train inspector while dodging oncoming trains, barriers and other objects.',
            'year' => '2012-05-23',
            'genre_id'=>'5',
            'creator_id'=> '6',
            'image' => 'fontend/assets/gamesimg/subway-surfers.jpg',

        ],
        ['name'=>'Clash Of Clans',
            'description'=>'Clash of Clans is an online multiplayer game in which players form communities called clans, train troops, and attack other players to earn resources.',
            'year' => '2012-11-02',
            'genre_id'=>'6',
            'creator_id'=> '7',
            'image' => 'fontend/assets/gamesimg/ClashofclansCharacter-Guide.jpg',

        ],
        ['name'=>'Resident Evil 4',
            'description'=>'In resident evil 4, special agent Leon S. Kennedy is sent on a mission to rescue the U.S. Presidents daughter who has been kidnapped.',
            'year' => '2005-01-11',
            'genre_id'=>'4',
            'creator_id'=> '8',
            'image' => 'fontend/assets/gamesimg/residentevil4.jpg',

        ],
        ['name'=>'FIFA 22',
            'description'=>'FIFA 22 is an association football simulation video game published by Electronic Arts as part of the FIFA series.',
            'year' => '2021-09-27',
            'genre_id'=>'7',
            'creator_id'=> '9',
            'image' => 'fontend/assets/gamesimg/fifa22.jpg',

        ],
        ['name'=>'Lady Popular',
            'description'=>'Its more than a dress up game – Lady Popular lets you completely change your ladys look at anytime! ',
            'year' => '2009-11-14',
            'genre_id'=>'3',
            'creator_id'=> '10',
            'image' => 'fontend/assets/gamesimg/ladypopular.jpg',
        ],
    ]);
}
}
