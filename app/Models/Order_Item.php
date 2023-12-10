<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order_Item extends Model
{
    protected $table = 'order_items';

    protected $primaryKey = 'order_item_id';
    
    // Define the fillable fields
    protected $fillable = [
        'order_id',
        'item_id',
        'quantity',
    ];
    
    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }

    public function item()
    {
        return $this->belongsTo(Item::class, 'item_id');
    }
}
