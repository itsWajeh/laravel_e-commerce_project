<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    protected $fillable = [
        'customer_id',
        'procuct_id',
        'qty',
        'price',
        
    ];
}
