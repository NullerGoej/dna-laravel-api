<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item_Category extends Model
{
    // Define the table associated with the model
    protected $table = 'item_category';

    // Define the primary key column name
    protected $primaryKey = 'category_id';

    // Define the fillable columns
    protected $fillable = [
        'category_name',
    ];

    // Define any relationships or additional methods here
}
