<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for($i = 0; $i < 100; $i++) {
            echo "ROW: " . $i . PHP_EOL;
            Product::insert(
                Product::factory()->count(5000)->make()->toArray()
            );
        }
    }
}
