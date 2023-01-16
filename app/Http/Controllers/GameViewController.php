<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class GameViewController extends Controller
{
    public function creators()
    {
        $creators = DB::table('creators')->select('name')->get();
        return (
        view('creators_view', ['creators' => $creators]));
    }

    public function genres()
    {
        $genres = DB::table('genres')->select('name')->get();
        return (
        view('genres_view', ['genres' => $genres]));
    }

    public function games()
    {
        $games = DB::table('games')->select('name', 'description', 'create_date', 'genre_id', 'creator_id', 'image')->get();
        $creators = DB::table('creators')->select('id','name')->get();
        $genres = DB::table('genres')->select('id','name')->get();
        return (
        view('game_view', ['games' => $games, 'creators' => $creators, 'genres' => $genres]));
    }




}

