<?php

namespace App\Models;

use App\Traits\SlugTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Product extends Model implements TranslatableContract
{
    use HasFactory , Translatable;
    use SlugTrait;
    protected $fillable = ['image','slug','brand_id','vendor_id'];
    protected $translatedAttributes = ['title','content']; 

    public function categories()
    {
        return $this->belongsToMany(Category::class,'category_products');
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class,'brand_id');
    }

}
