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
            ['name' => 'Remeras', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Musculosas', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Jeans', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Shorts, Minis y Polleras', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Camperas', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Tops y Bodys', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Blusas y Camisas', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Camisacos y Blaizers', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Buzos y Sweaters', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Vestidos, Enteritos y Fiesta', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
