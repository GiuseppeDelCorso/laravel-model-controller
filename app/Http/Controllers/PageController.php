<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function index()
    {
        $movie = Movie::all();

        $dati = config("data");
        return view('home', compact("movie"));
    }
}
