<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GeneratedInvoice extends Model
{
	protected $table = 'generated_invoice';
    protected $guarded =[];

    public function products()
    {
    	return $this->belongsTo('App\Product','product_id','id');
    }
}
