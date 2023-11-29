<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product_image extends Model
{
    use HasFactory;
    public function product(): HasOne
    {
        return $this->hasOne(Product::class);
    }
}
