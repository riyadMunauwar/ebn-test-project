<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Store extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'logo',
        'type',
        'country',
        'district',
        'upazila',
        'adress',
        'post_code',
        'phone',
        'email',
        'user_id'

    ];

    
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function products(){
        return $this->hasMany(Product::class);
    }

    public function productCaurosel(){
        return $this->hasMany(ProductCaurosel::class);
    }

    public function slider(){
        return $this->hasMany(Slider::class);
    }
}
