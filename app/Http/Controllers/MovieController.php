<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MovieController extends Controller
{
    public function index()
    {

//        return $url = env('DB_CONNECTION');

        $movieList = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/movie/popular?api_key=1f53e196d53db3c0666f6ecf146f1e89')
            ->json()['results'];

        $genraList = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/genre/movie/list?api_key=1f53e196d53db3c0666f6ecf146f1e89')
            ->json()['genres'];

        $genres = collect($genraList)->mapWithKeys(function ($item) {
            return [$item['id'] => $item['name']];
        });


        return view('index', [
            'movieList' => $movieList,
            'genres' => $genres

        ]);
    }
}
