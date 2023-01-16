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


    public function creators()
    {
        $creators = DB::table('creators')->select('name', 'date_of_starting')->get();
        return (
        view('index1', ['creators' => $creators]));
    }
}
