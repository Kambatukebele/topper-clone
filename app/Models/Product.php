<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    // protected $fillable = [
    //     "title",
    //     "description",
    //     "main_photo",
    //     "photo_one" ,
    //     "photo_two" ,
    //     "photo_three" ,
    //     "logo_brand",
    //     "price",
    //     "compare_at_price",
    //     "inventory",
    //     "sku",
    //     "status",
    //     "product_gender",
    //     "product_type",
    //     "collections",
    //     "tags",
    //     "brand",
    //     "case",
    //     "movement",
    //     "material",
    // ];

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }
    public function brands()
    {
        return $this->hasMany(ProductBrand::class);
    }
    public function Tags()
    {
        return $this->hasMany(ProductTag::class);
    }
}