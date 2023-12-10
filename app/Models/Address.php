<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    // Define the table associated with the model
    protected $table = 'addresses';

    protected $primaryKey = 'address_id';

    // Define the fillable attributes
    protected $fillable = [
        'user_id',
        'street_address',
        'city',
        'postal_code',
        'country',
    ];

    // Define any relationships or additional methods here
}
