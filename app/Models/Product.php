<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'code',
        'price',
        'quantity',
    ];
    public function scopeGetProducts($Query)
    {
        return $query->where('qquantity','!=',0);
    }
}
