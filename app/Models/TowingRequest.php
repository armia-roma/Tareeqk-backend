<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TowingRequest extends Model
{
    //
    protected $fillable = [
        'customer_id',
        'lat',
        'lang',
        'note',
        'status',
    ];
}
