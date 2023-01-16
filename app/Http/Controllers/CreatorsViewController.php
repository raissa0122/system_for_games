<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CreatorsViewController extends Controller
{
    public function creators()
    {
        $creators = DB::table('creators')->select('name', 'date_of_starting')->get();
        return (
        view('creators_view', ['creators' => $creators]));
    }
}
