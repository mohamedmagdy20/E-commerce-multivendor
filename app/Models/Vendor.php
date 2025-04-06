<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'phone',
        'password',
        'image',
        'account',
        'is_virified'
    ];

    public function scopeVirified($query)
    {
        $query->where('is_virified',true);
    }
    public function scopeNotVirified($query)
    {
        $query->where('is_virified',false);
    }
}