<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('colors')->insert([
            ['name' => 'Único', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Negro', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Blanco', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Rojo', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Verde', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Azul', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
