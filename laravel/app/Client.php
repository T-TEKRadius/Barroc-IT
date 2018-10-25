<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ['company_name', 'address_1', 'zipcode_1', 'residence_1', 'address_2', 'zipcode_2', 'residence_2', 'contact_person', 'initials', 'phone_number', 'fax_number', 'email', 'credit_worthy', 'discount_percentage', 'prospect'];
    //
    public function invoices() {
        return $this->hasMany('\App\Invoice')->orderBy('created_at', 'DESC');
    }
    public function sale(){
        return $this->hasOne('\App\Sale');
    }
}
