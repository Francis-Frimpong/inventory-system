<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'sku',
        'category_id',
        'cost_price',
        'selling_price',
        
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
