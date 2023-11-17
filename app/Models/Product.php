<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        "title",
        "description",
        "main_photo",
        "photo_one" ,
        "photo_two" ,
        "photo_three",
        "photo_four",
        "price",
        "compare_at_price",
        "stock",
        "status",
        "sku",
        "product_cases_id",
        "product_mouvements_id",
        "product_types_id",
        "product_genders_id",
        "product_collections_id",
        "product_materials_id",
    ];

    // public function images()
    // {
    //     return $this->hasMany(ProductImage::class);
    // }
    // public function brands()
    // {
    //     return $this->hasMany(ProductBrand::class);
    // }
    // public function Tags()
    // {
    //     return $this->hasMany(ProductTag::class);
    // }
}