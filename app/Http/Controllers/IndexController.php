<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index() {
        //Get data from DB in here and pass it to the view
        return view('frontend.index');
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
