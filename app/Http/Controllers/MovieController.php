<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
    public function topRated()
    {

        //$movies = DB::select("SELECT * FROM movies WHERE movie_type_id = 2 ORDER BY rating DESC LIMIT 50");
        $movies = Movie::orderByDesc('rating')->where('movie_type_id', 1)->limit(10)->get();
        return view("movies.movies", compact("movies"));

    } 
}
