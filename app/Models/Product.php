<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function producttype(){
        return $this->hasMany(producttype::class);
    }


    protected $fillable = ['name'];

    public function category(){
        return $this->belongsTo(category::class,'id');
    }

    public function subcategory(){
        return $this->hasMany(subcategory::class);
    }


    public function stock(){
        return $this->hasMany(stock::class);
    }
}

