<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'productname',
        'price',
        'image',
        'description',
        'category_id',
        'brand_id',
    ];

    //Định nghĩa quan hệ với model Brand
    public function brand(){
        return $this->belongsTo(Brand::class);
    }
    //Định nghĩa quan hệ với model Category
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
