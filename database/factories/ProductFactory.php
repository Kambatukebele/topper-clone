<?php

namespace Database\Factories;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'product_title' => fake()->sentence,
        'product_description' => fake()->paragraph,
        'product_main_photo' => fake()->imageUrl,
        'product_photo_1' => fake()->imageUrl,
        'product_photo_2' => fake()->imageUrl,
        'product_photo_3' => fake()->imageUrl,
        'product_logo_brand' => fake()->imageUrl,
        'product_brand' => fake()->randomElement(
            ['Omega', 'Grand Seiko', 'Breitling', 'H. Moser & Cie', 'Czapek', 'Zenith', 'Glashütte Original', 'Parmigiani', 'Fleurier', 'Blancpain', 'Oris', 'Seiko Luxe', 'Seiko 5'
            ]),
        'product_price' => fake()->randomFloat(2, 10, 1000),
        'product_compare_at_price' => fake()->randomFloat(2, 1000, 15000),
        'product_inventory' => fake()->numberBetween(0, 1000),
        'product_status' => fake()->randomElement(['in_stock', 'out_of_stock', 'pre_order', 'comming_soon']),
        'product_gender' => fake()->randomElement(['male', 'female']),
        'product_type' => fake()->randomElement(['active', 'chronograph', 'diamond', 'diver', 'dress', 'field', 'gmt', 'pilot', 'sport']),
        'product_collection' => fake()->randomElement(['watches' ,'topper-pre-owned-select', 'jewelry' ]),
        'product_case' => fake()->randomElement(['bronze', 'carbon', 'ceramic', 'pink_gold', 'resin', 'titanium']),
        'product_movement' => fake()->randomElement(['automatic', 'automatic_column_wheel', 'gps_solar', 'handwind', 'manual', 'Mechanical', 'quartz', 'self_winding', 'solar_quartz', 'spring_drive']),
        'product_material' => fake()->randomElement(['carbon_fiber']),
        'product_tags' => fake()->words(3, true),
        'SKU' => fake()->unique()->ean8, // Generate unique SKU
        ];
    }
}
