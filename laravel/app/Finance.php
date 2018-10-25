<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Finance extends Model
{
    //
    protected $table = 'finance';

    protected $fillable = ['client_id','invoice_amount', 'revenue', 'limit', 'bank_account_number', 'ledger_number', 'vat_number'];

    public function client(){
        return $this->hasOne('\App\Client');
    }
}
