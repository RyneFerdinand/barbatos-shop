<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    public function transactions(){
        return $this->hasMany(TransactionHeader::class);
    }

    public function carts(){
        return $this->hasMany(Cart::class, 'user_id', 'id');
    }
}
