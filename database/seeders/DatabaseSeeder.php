<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\ProductBrand;
use App\Models\ProductCollection;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            ProductBrandSeeder::class,
            ProductCaseSeeder::class,
            ProductMouvementSeeder::class,
            ProductTypeSeeder::class,
            ProductGenderSeeder::class,
            ProductCollectionSeeder::class,
            ProductMaterialSeeder::class,
            RoleSeeder::class,
        ]);
    }
}
