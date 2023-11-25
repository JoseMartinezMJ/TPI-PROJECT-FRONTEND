<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory;

    public function coupon(){
        return $this->belongsToMany(Discount::class,'user_coupon');
    }

    public function wishlist(){
        return $this->belongsToMany(Wishlist::class,'user_wishlist');
    }

    public function purchase(){
        return $this->belongsToMany(Purchase::class,'purchase_history');;
    }

    public function payment(){
        return $this->belongsToMany(Payment::class,'user_product_payment');
    }
}
