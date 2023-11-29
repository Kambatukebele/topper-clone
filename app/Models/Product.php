<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        "title",
        "description",
        "product_image_id",
        "product_price_id",
        "user_id",
        "stock",
        "status",
        "product_brand_id",
        "product_cases_id",
        "product_mouvements_id",
        "product_types_id",
        "product_genders_id",
        "product_collections_id",
        "product_materials_id",
    ];

    public function product_brand(): BelongsTo
    {
        return $this->belongsTo(ProductBrand::class, 'id', 'product_brand_id');
    }
    public function product_case()
    {
        return $this->belongsTo(ProductCase::class, 'product_id');
    }
    public function product_mouvement()
    {
        return $this->belongsTo(ProductMouvement::class, 'product_id');
    }
    public function product_type()
    {
        return $this->belongsTo(ProductType::class, 'product_id');
    }
    public function product_gender()
    {
        return $this->belongsTo(ProductGender::class, 'product_id');
    }
    public function product_collection()
    {
        return $this->belongsTo(ProductCollection::class, 'product_id');
    }
    public function product_material()
    {
        return $this->belongsTo(ProductMaterial::class, 'product_id');
    }
    public function product_image(): BelongsTo
    {
        return $this->belongsTo(Product_image::class, 'product_id');
    }
    public function product_price(): BelongsTo
    {
        return $this->belongsTo(Product_price::class, 'product_id');
    }
}