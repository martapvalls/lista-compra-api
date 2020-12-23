<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Producto;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Producto::factory()->times(count: 1)->create([
            "producto" => "pan",
            "comprado" => false
        ]);
        
    }
}
