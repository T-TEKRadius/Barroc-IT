<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    //
    protected $primaryKey = 'client_id';

    protected $fillable = ['client_id','invoice_link', 'created_at', 'updated_at', 'hash'];

    public function client() {
        return $this->belongsTo('\App\Client');
    }
}
