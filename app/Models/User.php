<?php

namespace App\Models;

// use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    public function transactions(){
        return $this->hasMany(TransactionHeader::class);
    }

    public function carts(){
        return $this->hasMany(Cart::class);
    }
}
