<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MyController extends Controller
{
    public function index(){

        $awards = DB::select("SELECT * FROM `movies` ORDER BY rating DESC");

        

        return view("awards.index", compact('awards'));
    }
}
