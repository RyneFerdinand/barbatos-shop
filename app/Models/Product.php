<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function carts(){
        return $this->hasMany(Cart::class, 'product_id', 'id');
    }

    public function details(){
        return $this->hasMany(TransactionDetail::class, 'product_id', 'id');
    }

    public function categories(){
        return $this->belongsToMany(Category::class, 'product_categories', 'product_id', 'category_id');
    }
}
