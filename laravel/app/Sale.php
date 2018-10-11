<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    //
    protected $fillable = ['client_id', 'offer_number', 'offer_status', 'date_of_action', 'next_action', 'last_contact_date', 'created_at', 'updated_at'];
}