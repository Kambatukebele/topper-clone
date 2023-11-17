<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*
            
 
 
 
 
 
 
 
 
        */
        DB::table('product_types')->insert([
            'type_name' => "Active",
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(), 
        ]);   
        DB::table('product_types')->insert([
            'type_name' => "Chronograph",
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(), 
        ]); 
        DB::table('product_types')->insert([
            'type_name' => "Diamond",
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(), 
        ]); 
        DB::table('product_types')->insert([
            'type_name' => "Diver",
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(), 
        ]); 
        DB::table('product_types')->insert([
            'type_name' => "Dress",
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(), 
        ]); 
        DB::table('product_types')->insert([
            'type_name' => "Field",
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(), 
        ]); 
        DB::table('product_types')->insert([
            'type_name' => "GMT",
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(), 
        ]); 
        DB::table('product_types')->insert([
            'type_name' => "Pilot",
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(), 
        ]); 
        DB::table('product_types')->insert([
            'type_name' => "Sport",
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(), 
        ]); 

        // Jewelry
        DB::table('product_types')->insert([
            'type_name' => "Bangle",
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(), 
        ]); 
        DB::table('product_types')->insert([
            'type_name' => "Bracelet",
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(), 
        ]); 
        DB::table('product_types')->insert([
            'type_name' => "Earrings",
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(), 
        ]); 
        DB::table('product_types')->insert([
            'type_name' => "Necklace",
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(), 
        ]); 
        DB::table('product_types')->insert([
            'type_name' => "Pendant",
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(), 
        ]); 
        DB::table('product_types')->insert([
            'type_name' => "Ring",
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(), 
        ]); 
    }
}
