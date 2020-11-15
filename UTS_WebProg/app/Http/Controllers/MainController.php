<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function home()
    {
        $movies = \App\Movie::all();
        $genres = \App\Genre::all();
        $episodes = \App\Episode::all();
        return view('home', ['movies' => $movies],['genres' => $genres],['episodes' => $episodes]);
    }

    public function category()
    {
        return view('category');
    }


}