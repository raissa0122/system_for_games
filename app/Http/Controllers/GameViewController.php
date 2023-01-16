<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Genre;
use App\Models\Creator;
use Illuminate\Database\Eloquent\Builder;
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

    public function search(Request $request)
    {
        $games = DB::table('games')->select('name','description', 'create_date', 'genre_id', 'creator_id')->get();
        $creators = DB::table('creators')->select('id','name')->get();
        $genres = DB::table('genres')->select('id','name')->get();

        $searchStr = $request->get('q');
        $games = Game::orWhere('name', 'LIKE', '%' . $searchStr . '%')
            ->orWhere('create_date', 'LIKE', '%' . $searchStr . '%')
            ->orWhereHas('creator', function (Builder $query) use ($searchStr) {
                $query->where('name', 'like', '%' . $searchStr . '%');
            })->orWhereHas('genres', function (Builder $query) use ($searchStr) {
                $query->where('name', 'like', '%' . $searchStr . '%');
            })->get();

        return view('games_view', ['games' => $games,'creators' => $creators, 'genres' => $genres]);
    }



}

