<?php

namespace App\Http\Controllers;

use App\Sale;
use Illuminate\Http\Request;
use App\Client;
use App\Invoice;


class FinanceController extends Controller
{
    //
    public function index()
    {
        $client = Client::all()->sortByDesc('invoices.created_at');
        $sales = Sale::all();

        return view('finance/status')
            ->with('clients', $client)
            ->with('sales', $sales);
    }
}
