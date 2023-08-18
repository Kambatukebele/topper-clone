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
            $table->char('product_title', 100);
            $table->longText('product_description');
            $table->binary('product_main_photo');
            $table->binary('product_photo_1')->nullable();
            $table->binary('product_photo_2')->nullable();
            $table->binary('product_photo_3')->nullable();
            $table->binary('product_logo_brand');
            $table->char('product_brand', 100);
            $table->char('product_price', 50);
            $table->char('product_compare_at_price', 50)->nullable();
            $table->string('product_inventory');
            $table->char('product_status', 20)->default('draft');
            $table->char('product_gender', 50);
            $table->char('product_type', 50);
            $table->char('product_collection', 50);
            $table->char('product_case', 50)->nullable();
            $table->char('product_mouvement', 50)->nullable();
            $table->char('product_material', 50);
            $table->string('product_tags');
            $table->string('SKU'); 
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