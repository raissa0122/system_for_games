<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index() {
        //Get data from DB in here and pass it to the view

        return view('index.index', [
            'title' => 'Laravel Project about us',
            'text' => '<p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.
            </p>',
            'imgURL' => 'assets/images/about/about-part.jpg',
        ]);
    }

    public function index1() {
        $games = DB::table('games')->select('name', 'description', 'create_date', 'genre_id', 'creator_id', 'image')->get();

        $last_3 = DB::table('genres')->orderBy("genre_id", 'creator_id',)->select('name','image')->take(3)->get();


        return view('index1', ['games' => $games,
                                    'last_3' => $last_3]);
    }
    public function creators()
    {
        $creators = DB::table('creators')->select('name', 'date_of_starting')->get();
        return (
        view('index1', ['creators' => $creators]));
    }
}
