<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InvoiceClients extends Model
{
    
    public function clients()
    {
    	return $this->belongsTo('App\ClientDetail', 'invoice_clients_id', 'id' );
    }

    // public function generatedInvoice()
    // {
    // 	return $this->hasMany('App\GeneratedInvoice', 'invoice_clients_id', 'id' );
    // }
}
