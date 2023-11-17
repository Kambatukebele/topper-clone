<?php

namespace Database\Seeders;

use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('products')->insert([
        //     'product_title' => Str::random(10),
        //     'product_description' => Str::random(10),
        //     'product_main_photo' =>  'images/g-shock-mtg-aurora-borealis-topper_360x.webp',       
        //     'product_price' => '13 000',
        //     'product_compare_at_price' =>'16 000',
        //     'product_inventory' => '100',
        //     'product_status' => '1',
        //     'product_gender' => Arr::random(['Male', "Female"],),
        //     'product_type' => 'watches',
        //     'product_collection' => 'watches',
        //     'product_case' => 'yes',
        //     'product_mouvement' => 'yes',
        //     'product_material' => 'leather',
        //     'SKU' => '202399494'
        // ]);
    }
}
