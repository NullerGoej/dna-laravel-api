<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'items';

    protected $primaryKey = 'item_id';

    protected $fillable = [
        'price',
        'title',
        'description',
        'image',
        'category_id', // 'category_id' is the foreign key of 'id' in 'categories' table
        
    ];
}

