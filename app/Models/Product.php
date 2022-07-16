<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;



    public function store(){
        return $this->belongsTo(Store::class);
    }


    public function categories(){
        return $this->belongsToMany(Category::class);
    }


    public function brand(){
        $this->belongsTo(Brnad::class);
    }

    
    public function comments(){
        this->hasMany(Comment::class);
    } 
}
