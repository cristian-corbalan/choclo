<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductVariantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('product_variants')->insert([
            [
                'stock' => 5,
                'product_id' => 1,
                'color_id' => 1,
                'size_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'stock' => 5,
                'product_id' => 1,
                'color_id' => 1,
                'size_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'stock' => 2,
                'product_id' => 1,
                'color_id' => 1,
                'size_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
