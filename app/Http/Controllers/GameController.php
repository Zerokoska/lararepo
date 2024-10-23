<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GameController extends Controller
{
    public function games()
    {

        $games = DB::select("SELECT * FROM movies WHERE movie_type_id = 7 ORDER BY rating DESC LIMIT 50");

        return view("games.games", compact("games"));

    }
}
