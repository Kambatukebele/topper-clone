<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->char('title', 100);
            $table->longText('description');
            $table->foreignId('product_image_id');
            $table->foreignId('user_id');    
            $table->foreignId('product_price_id');
            $table->string('stock')->default(0);
            $table->char('status', 20)->default('draft');
            $table->foreignId('product_brands_id')->nullable();
            $table->foreignId('product_cases_id')->nullable();
            $table->foreignId('product_mouvements_id')->nullable();
            $table->foreignId('product_types_id')->nullable();
            $table->foreignId('product_genders_id')->nullable();
            $table->foreignId('product_collections_id')->nullable();
            $table->foreignId('product_materials_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};