<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class GenresViewController extends Controller
{
    public function genres()
    {
        $genres = DB::table('genres')->select('name')->get();
        return (
        view('genres_view', ['genres' => $genres]));
    }
}
