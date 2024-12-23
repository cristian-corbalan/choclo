<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sizes')->insert([
            ['name' => 'Único', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'XS', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'S', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'M', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'L', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'XL', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'XXL', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
