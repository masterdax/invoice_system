<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LeaveMessage extends Model
{
    protected $guarded = [];

    public function getBodyAttribute($value)
    {
    	return ucfirst($value);
    }
}
