<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('stocks')->insert([
            [
                'quantity' => 5,
                'product_id' => 1,
                'color_id' => 1,
                'size_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'quantity' => 5,
                'product_id' => 1,
                'color_id' => 1,
                'size_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'quantity' => 2,
                'product_id' => 1,
                'color_id' => 1,
                'size_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
