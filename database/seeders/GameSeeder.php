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
        'image' => 'https://www.gamervines.com/wp-content/uploads/2021/07/PUBG-PC.jpg',
            ],
        ['name'=>'GTA',
            'description'=>'The story of three uniquely-different criminals as they commit daring and profitable heists across the sprawling city of Los Santos. ',
            'year' => '2013-09-17',
            'genre_id'=>'2',
            'creator_id'=> '2',
            'image' => 'https://cdn.akamai.steamstatic.com/steam/apps/271590/capsule_616x353.jpg?t=1671485100',

        ],
        ['name'=>'Homescapes',
            'description'=>'The storyline narrates about attempts of the games protagonist, Austin the Butler, to restore his childhood home.',
            'year' => '2017-07-26',
            'genre_id'=>'3', 
            'creator_id'=> '3',
            'image' => 'https://miro.medium.com/max/1152/0*YViKlVlWZxDByQB_.jpeg',

        ],
        ['name'=>'Fireboy and Watergirl',
            'description'=>'Fireboy must avoid the water and Watergirl must avoid the fire, and be careful, the green mud kills them both! You can collect diamonds for extra points!',
            'year' => '2009-11-19',
            'genre_id'=>'2',
            'creator_id'=> '4',
            'image' => 'https://images.crazygames.com/games/fireboy-and-watergirl-5-elements/cover-1586285304860.jpg?auto=format,compress&q=75&cs=strip',

        ],
        ['name'=>'DEAD BY DAYLIGHT',
            'description'=>'Dead by Daylight is a horror game where one player takes on the role of the savage Killer.',
            'year' => '2016-06-14',
            'genre_id'=>'4',
            'creator_id'=> '5',
            'image' => 'https://cdn1.epicgames.com/offer/611482b8586142cda48a0786eb8a127c/EGS_DeadbyDaylight_BehaviourInteractive_S1_2560x1440-a32581cf9948a9a2e24b2ff15c1577c7',

        ],
        ['name'=>'Garden Affairs',
            'description'=>'Beat clever Match-3 levels with incredible boosters to decorate the mansion of your dreams, foster adorable pets, and unlock new chapters of the exciting story! ',
            'year' => '2019-07-22',
            'genre_id'=>'3',
            'creator_id'=> '3',
            'image' => 'https://i.ytimg.com/vi/rJ5q3oWvpGc/maxresdefault.jpg',

        ],
        ['name'=>'Subway Surf',
            'description'=>'The aim of the game is to outrun a train inspector while dodging oncoming trains, barriers and other objects.',
            'year' => '2012-05-23',
            'genre_id'=>'5',
            'creator_id'=> '6',
            'image' => 'https://drift-hunters.co/upload/imgs/subway-surfers1.jpg',

        ],
        ['name'=>'Clash Of Clans',
            'description'=>'Clash of Clans is an online multiplayer game in which players form communities called clans, train troops, and attack other players to earn resources.',
            'year' => '2012-11-02',
            'genre_id'=>'6',
            'creator_id'=> '7',
            'image' => 'https://earlygame.com/uploads/images/_body/ClashofclansCharacter-Guide.jpg',

        ],
        ['name'=>'Resident Evil 4',
            'description'=>'In resident evil 4, special agent Leon S. Kennedy is sent on a mission to rescue the U.S. Presidents daughter who has been kidnapped.',
            'year' => '2005-01-11',
            'genre_id'=>'4',
            'creator_id'=> '8',
            'image' => 'https://cdn.akamai.steamstatic.com/steam/apps/2050650/capsule_616x353.jpg?t=1666665420',

        ],
        ['name'=>'FIFA 22',
            'description'=>'FIFA 22 is an association football simulation video game published by Electronic Arts as part of the FIFA series.',
            'year' => '2021-09-27',
            'genre_id'=>'7',
            'creator_id'=> '9',
            'image' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/1506830/capsule_616x353.jpg?t=1653581021',

        ],
        ['name'=>'Lady Popular',
            'description'=>'Its more than a dress up game – Lady Popular lets you completely change your ladys look at anytime! ',
            'year' => '2009-11-14',
            'genre_id'=>'3',
            'creator_id'=> '10',
            'image' => 'https://i.pinimg.com/originals/6a/f3/b5/6af3b5bde3fc83e632f22efc7195ba90.jpg',
        ],
    ]);
}
}
