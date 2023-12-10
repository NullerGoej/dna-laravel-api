<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    // Define the table associated with the model
    protected $table = 'orders';

    // Define the primary key column name
    protected $primaryKey = 'order_id';

    // Define the fillable columns
    protected $fillable = [
        'user_id',
        'product_id',
        'order_date',
    ];

    public function order_items()
    {
        return $this->hasMany(Order_Item::class, 'order_id');
    }
}
