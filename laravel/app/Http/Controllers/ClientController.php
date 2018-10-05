<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index() {
        //$games = Game::where('title', 'LIKE', '%a%')
        //    ->orderBy('title', 'DESC')
        //    ->get(['id', 'title', 'publisher']);

        $clients = Client::all();

        //dd($clients); // dump & die

        return view('sales/status')
            ->with('clients', $clients);
    }
    public function create(Request $request)
    {

        $input = $request->all();
        $exist = Client::where('company_name', $input['company_name'])->first();
        if ($exist) {
            echo 'Already Exists';
        } elseif (!$exist) {
            $inputs = [
                'address_1' => $input['address_1'],
                'company_name' => $input['company_name'],
                'zipcode_1' => $input['zipcode_1'],
                'residence_1' => $input['residence_1'],
                'zipcode_2' => $input['zipcode_2'],
                'address_2' => $input['address_2'],
                'contact_person' => $input['contact_person'],
                'residence_2' => $input['residence_2'],
                'initials' => $input['initials'],
                'phone_number' => $input['phone_number'],
                'fax_number' => $input['fax_number'],
                'email' => $input['email'],
                'discount_percentage' => $input['sales_percentage'],
                'credit_worthy' => $input['credit_worthy'],
                'prospect' => $input['prospect']
            ];
            Client::create($inputs);
            echo 'Client Added';
            return redirect('sales/status');
        }
    }
    public function edit($id){
        $client = Client::findOrFail($id);

        return view('sales/create')
            ->with('client', $client);
    }
}