<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BrandTranslation extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'locale',
        'brand_id'
    ];
}
