<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    use HasFactory;
    protected $fillable = ['images','product_id','product_stock_id'];

    protected $casts = [
        'images'=>'array'
    ];
}
