<?php

namespace App\Models;

use App\Traits\SlugTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model implements TranslatableContract
{
    use HasFactory;
    use Translatable;
    use SlugTrait;
    protected $translatedAttributes = ['title'];
    protected $fillable = ['slug','image'];

    public function product()
    {
        return $this->hasMany(Product::class,'brand_id');
    }

}
