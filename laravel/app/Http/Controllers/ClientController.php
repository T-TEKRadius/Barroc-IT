<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    //
    public function index() {
        //$games = Game::where('title', 'LIKE', '%a%')
        //    ->orderBy('title', 'DESC')
        //    ->get(['id', 'title', 'publisher']);

        $clients = Client::all();

        //dd($clients); // dump & die

        return view('sales/status')
            ->with('clients', $clients);
    }
}
