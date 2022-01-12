<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'products';
    protected $fillable = ['name','image','code','price'];
    public $timestamp = false;

    public function getImageAttribute($value)
    {
        return asset('frontend/Images/' . $value);
    }
}
