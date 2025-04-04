<?php

namespace App\Models;

use App\Traits\SlugTrait;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model implements TranslatableContract
{
    use HasFactory;
    use Translatable;
    use SlugTrait;
    protected $translatedAttributes = ['title','content']; 
    protected $fillable = ['slug','parent_id','image'];
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    public function scopeIsParent($query)
    {
        $query->where('parent_id',null);   
    }


    public function childs()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }
}
