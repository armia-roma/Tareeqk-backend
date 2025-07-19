<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

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

    /**
     * Get the customer associated with the towing request.
     */
    public function customer()
    {
        return $this->belongsTo(User::class, 'customer_id');
    }
}
