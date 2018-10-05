<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;

class ClientController extends Controller
{
    //
    public function create(Request $request){

        $input = $request->all();
        $exist = Client::where('company_name', $input['company_name'])->first();
        if($exist){
            echo 'Already Exists';
        }
        elseif (!$exist){
            $inputs = [
                'company_name'=> $input['company_name'],
                'address_1'=> $input['address_1'],
                'zipcode_1'=> $input['zipcode_1'],
                'residence_1'=> $input['residence_1'],
                'address_2'=> $input['address_2'],
                'zipcode_2'=> $input['zipcode_2'],
                'residence_2'=> $input['residence_2'],
                'contact_person'=> $input['contact_person'],
                'initials'=> $input['initials'],
                'phone_number'=> $input['phone_number'],
                'fax_number'=> $input['fax_number'],
                'email'=> $input['email'],
                'credit_worthy'=> $input['credit_worthy'],
                'discount_percentage'=> $input['sales_percentage'],
                'prospect'=> $input['prospect']
            ];
            Client::create($inputs);
            echo 'Client Added';
        }

        return view('sales/sales');
    }
    public function edit(){

    }
}
