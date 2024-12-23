<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'code' => 'pazb1',
                'name' => 'Pantalón de Jean',
                'price' => 400,
                'description' => 'Un lindo pantalón',
                'image' => 'https://placehold.co/400',
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'pazc1',
                'name' => 'Pantalón de Jean másculino',
                'price' => 800,
                'description' => 'Para tus fiestas elegantes',
                'image' => 'https://placehold.co/400',
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'pazc3',
                'name' => 'Pantalón grande',
                'price' => 500,
                'description' => 'Pantalón con grandes filetos',
                'image' => 'https://placehold.co/400',
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
