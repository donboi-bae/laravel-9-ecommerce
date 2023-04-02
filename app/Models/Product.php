<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'description',
        'stock',
        'image'
    ];

    public function transactions()
    {
        return $this->belonsToMany(Order::class);
    }

    public function carts()
    {
        return $this->hasMany(Cart::class);
    }
}
