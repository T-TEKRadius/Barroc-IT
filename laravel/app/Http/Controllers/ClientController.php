<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    //
    public function index() {
        //$games = Game::where('title', 'LIKE', '%a%')
        //    ->orderBy('title', 'DESC')
        //    ->get(['id', 'title', 'publisher']);

        $games = Game::all();

        //dd($games); // dump & die

        return view('games/index')
            ->with('games', $games);
    }
}
