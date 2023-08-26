<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Http;

class GamesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $before = now()->subMonths(2)->timestamp;
        $after = now()->addMonths(2)->timestamp;

        $apiKey = Config::get('services.igdb.api_key'); // Access the API key from the config
        $apiSecret = Config::get('services.igdb.api_secret'); // Access the API secret from the config
        $url = 'https://api.igdb.com/v4/games/?fields=*&covers=covers&where=platforms=(48,49,130,6)&(first_release_date > {$before} & first_release_date < {$after})&limit=12';
        $url2 = 'https://api.igdb.com/v4/covers/?fields=*&limit12';
        $url3 = 'https://api.igdb.com/v4/covers/?fields=*&limit=3';

        $popularGames = Http::withHeaders([
            'Client-ID' => $apiKey,
            'Authorization' => 'Bearer ' . $apiSecret,
        ])->get($url)->json();

        $covers = Http::withHeaders([
            'Client-ID' => $apiKey,
            'Authorization' => 'Bearer ' . $apiSecret,
        ])->get($url2)->json();

        $recentReviews = Http::withHeaders([
            'Client-ID' => $apiKey,
            'Authorization' => 'Bearer ' . $apiSecret,
        ])->get($url3)->json();
//        dump($popularGames, $covers);

//         Combine the two arrays into an array of pairs
        $gameCovers = array_map(function ($game, $cover) {
            return [
                'game' => $game,
                'cover' => $cover,
            ];
        }, $popularGames, $covers);

        dump($gameCovers);
        return view('frontend.index', compact('gameCovers', 'recentReviews'));


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
