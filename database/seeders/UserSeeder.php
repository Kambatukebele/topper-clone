<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'kams',
            'email' => 'kams@gmail.com',
            'password' => Hash::make('password123'),
            'role_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(), 
        ]);
        DB::table('users')->insert([
            'name' => 'editor',
            'email' => 'editor@gmail.com',
            'password' => Hash::make('password123'),
            'role_id' => 2,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(), 
        ]);
        DB::table('users')->insert([
            'name' => 'client',
            'email' => 'client@gmail.com',
            'password' => Hash::make('password123'),
            'role_id' => 3,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(), 
        ]);
        
    }
}