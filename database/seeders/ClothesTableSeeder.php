<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class ClothesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clothes')->insert([
            ['title' => 'T-Shirt', 'brand' => 'JadenLondon', 'description' => 'Lorem ipsum', 'price' => 28.99],
            ['title' => 'Hoodie', 'brand' => 'Zara', 'description' => 'Lorem ipsum', 'price' => 17.00],
        ]);
    }
}
