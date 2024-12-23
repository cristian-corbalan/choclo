<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Alternative 02
        DB::table('categories')->insert([
            ['name' => 'Pantalones', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Camperas', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Remeras', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
