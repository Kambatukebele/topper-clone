<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductBrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('product_brands')->insert([
            'brand_name' => "Armin Strom",
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(), 
        ]);
        DB::table('product_brands')->insert([
            'brand_name' => "Ball",
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(), 
        ]);
        DB::table('product_brands')->insert([
            'brand_name' => "Bell & Ross",
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(), 
        ]);
        DB::table('product_brands')->insert([
            'brand_name' => "Blancpain",
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(), 
        ]);
        DB::table('product_brands')->insert([
            'brand_name' => "Breitling",
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(), 
        ]);
        DB::table('product_brands')->insert([
            'brand_name' => "Bremont",
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(), 
        ]);
        DB::table('product_brands')->insert([
            'brand_name' => "Czapek",
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(), 
        ]);
        DB::table('product_brands')->insert([
            'brand_name' => "Fears",
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(), 
        ]);
        DB::table('product_brands')->insert([
            'brand_name' => "G-Shock",
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(), 
        ]);
        DB::table('product_brands')->insert([
            'brand_name' => "Glashütte Original",
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(), 
        ]);
        DB::table('product_brands')->insert([
            'brand_name' => "Grand Seiko",
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(), 
        ]);
        DB::table('product_brands')->insert([
            'brand_name' => "H. Moser & Cie",
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(), 
        ]);
        DB::table('product_brands')->insert([
            'brand_name' => "Halios",
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(), 
        ]);
        DB::table('product_brands')->insert([
            'brand_name' => "Hamilton",
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(), 
        ]);
        DB::table('product_brands')->insert([
            'brand_name' => "Longines",
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(), 
        ]);
        DB::table('product_brands')->insert([
            'brand_name' => "MeisterSinger",
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(), 
        ]);
        DB::table('product_brands')->insert([
            'brand_name' => "Michele",
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(), 
        ]);
        DB::table('product_brands')->insert([
            'brand_name' => "Mühle Glashütte",
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(), 
        ]);
        DB::table('product_brands')->insert([
            'brand_name' => "Nomos Glashütte",
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(), 
        ]);
        DB::table('product_brands')->insert([
            'brand_name' => "Oceanus",
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(), 
        ]);
        DB::table('product_brands')->insert([
            'brand_name' => "Omega",
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(), 
        ]);
        DB::table('product_brands')->insert([
            'brand_name' => "Oris",
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(), 
        ]);
        DB::table('product_brands')->insert([
            'brand_name' => "Parmigiani Fleurier",
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(), 
        ]);
        DB::table('product_brands')->insert([
            'brand_name' => "Rado",
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(), 
        ]);
        DB::table('product_brands')->insert([
            'brand_name' => "Seiko",
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(), 
        ]);
        DB::table('product_brands')->insert([
            'brand_name' => "Seiko Luxe",
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(), 
        ]);
        DB::table('product_brands')->insert([
            'brand_name' => "Singer Reimagined",
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(), 
        ]);
        DB::table('product_brands')->insert([
            'brand_name' => "Topper Edition",
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(), 
        ]);
        DB::table('product_brands')->insert([
            'brand_name' => "Zenith",
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(), 
        ]);
        DB::table('product_brands')->insert([
            'brand_name' => "Zodiac",
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(), 
        ]);
        // Pre-owned-select
        DB::table('product_brands')->insert([
            'brand_name' => "Bamford",
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(), 
        ]);

        DB::table('product_brands')->insert([
            'brand_name' => "Baume & Mercier",
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(), 
        ]);
        DB::table('product_brands')->insert([
            'brand_name' => "Bulova",
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(), 
        ]);
        DB::table('product_brands')->insert([
            'brand_name' => "Chronotechna",
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(), 
        ]);
        DB::table('product_brands')->insert([
            'brand_name' => "Citizen",
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(), 
        ]);
        DB::table('product_brands')->insert([
            'brand_name' => "Corum",
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(), 
        ]);
        DB::table('product_brands')->insert([
            'brand_name' => "Credor",
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(), 
        ]);
        DB::table('product_brands')->insert([
            'brand_name' => "Doxa",
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(), 
        ]);
        DB::table('product_brands')->insert([
            'brand_name' => "Ebel",
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(), 
        ]);
        DB::table('product_brands')->insert([
            'brand_name' => "Formex",
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(), 
        ]);
        DB::table('product_brands')->insert([
            'brand_name' => "Fortis",
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(), 
        ]);
        DB::table('product_brands')->insert([
            'brand_name' => "Girard Perregaux",
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(), 
        ]);

        //Jewelry
        DB::table('product_brands')->insert([
            'brand_name' => "Aresa New York",
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(), 
        ]);
        DB::table('product_brands')->insert([
            'brand_name' => "Goshwara",
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(), 
        ]);
        DB::table('product_brands')->insert([
            'brand_name' => "Marco Bicego",
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(), 
        ]);
        DB::table('product_brands')->insert([
            'brand_name' => "Roberto Coin",
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(), 
        ]);
        DB::table('product_brands')->insert([
            'brand_name' => "Shy Creation",
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(), 
        ]);
        DB::table('product_brands')->insert([
            'brand_name' => "Tacori",
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(), 
        ]);
        DB::table('product_brands')->insert([
            'brand_name' => " Triton",
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(), 
        ]);
    }
}
