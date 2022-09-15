<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Producttype extends Model
{
    use HasFactory;

    protected $fillable = ['name','product_id'];
    protected $table = 'producttypes';
    public function product(){
        return $this->belongsTo(Product::class);
    }
}
 