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
        "product_brand_id",
        "product_cases_id",
        "product_mouvements_id",
        "product_types_id",
        "product_genders_id",
        "product_collections_id",
        "product_materials_id",
    ];

    public function product_brands()
    {
        return $this->hasOne(ProductBrand::class);
    }
    public function product_cases()
    {
        return $this->hasOne(ProductCase::class);
    }
    public function product_mouvements()
    {
        return $this->hasOne(ProductMouvement::class);
    }
    public function product_types()
    {
        return $this->hasOne(ProductType::class);
    }
    public function product_genders()
    {
        return $this->hasOne(ProductGender::class);
    }
    public function product_collections()
    {
        return $this->hasOne(ProductCollection::class);
    }
    public function product_materials()
    {
        return $this->hasOne(ProductMaterial::class);
    }
}