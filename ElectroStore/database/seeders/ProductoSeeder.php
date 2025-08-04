<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
         DB::table('productos')->insert([
            [
                'nombre' => 'Smartphone Galaxy S23',
                'precio' => 999.99,
                'marca_id' => 4, // Samsung
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'iPhone 15 Pro',
                'precio' => 1199.99,
                'marca_id' => 5, // Apple
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Auriculares WH-1000XM5',
                'precio' => 399.99,
                'marca_id' => 6, // Sony
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
