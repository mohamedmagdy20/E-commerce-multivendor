<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductStock extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'size_id',
        'color_id',
        'stock',
        'is_avaiable'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class , 'product_id');
    }

    public function size()
    {
        return $this->belongsTo(Size::class,'color_id');
    }

    
    public function Color()
    {
        return $this->belongsTo(Color::class,'color_id');
    }
}
