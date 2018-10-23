<?php

namespace App\Http\Controllers;

use App\Client;
use App\Sale;
use App\Invoice;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Validation\Rules\In;

class ClientController extends Controller
{
    public function index() {
        //$games = Game::where('title', 'LIKE', '%a%')
        //    ->orderBy('title', 'DESC')
        //    ->get(['id', 'title', 'publisher']);

        $clients = Client::all();
        $sales = Sale::all();


        //dd($clients); // dump & die

        return view('sales/status')
            ->with('clients', $clients)
            ->with('sales', $sales);
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
            $id = Client::select('id')->where('company_name', '=', $input['company_name'])->get();
            $inputs_sales = [
                'client_id' => $id[0]['id'],
                'offer_number' => $input['offer_numbers'],
                'offer_status' => $input['offer_stat'],
                'date_of_action' => $input['date_of_action'],
                'next_action' => $input['n_action'],
                'last_contact_date' => $input['l_contact_date'],
                'created_at' => Carbon::createFromFormat('Y-m-d', date('Y-m-d'))

            ];
            Sale::create($inputs_sales);

            echo 'Client Added';
            return redirect('sales/status');
        }
    }
    public function edit($id){
        $client = Client::findOrFail($id);
        $primaryKey = 'client_id';
        $sales = Sale::findOrFail($id);
        $primaryKey = 'id';

        return view('sales/create')
            ->with('client', $client)
            ->with('sales', $sales);
    }
    public function apply($id, Request $request){
        if(isset($id)){
            if (isset($request['company_name'])){
                $input=$request;

                $client = Client::findOrFail($id)->update([
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
                ]);
                $sales = Sale::findOrFail($id)->update([
                    'offer_number' => $input['offer_numbers'],
                    'offer_status' => $input['offer_stat'],
                    'next_action' => $input['n_action'],
                    'last_contact_date' => $input['l_contact_date'],
                ]);

                return redirect()->route('sales.index');
            } else {
                return route('sales.index');
            }
        } else {
            return route('sales.index');
        }
    }

    public function show($id){

        $client = Client::find($id);

        return view('sales/invoice')
            ->with('client', $client);
    }
}