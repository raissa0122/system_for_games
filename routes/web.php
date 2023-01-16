<?php

use App\Http\Controllers\GameViewController;
use App\Http\Controllers\GenresViewController;
use App\Http\Controllers\CreatorsViewController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [IndexController::class,'index']);

Route::get('/games_view',[GameViewController::class,'games']);
Route::get('/genres_view',[GenresViewController::class,'genres']);
Route::get('/creators_view',[CreatorsViewController::class,'creators']);
Route::get('/games', [GameViewController::class,'search'])->name('games.search');

