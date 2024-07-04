<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'title' => 'Duis tempor culpa exercitation consequat excepteur sunt officia sint.',
            'price' => 19.02,
            'quantity' => 5,
            'category_id' => 1,
            'brand_id' => 1,
            'description' => 'Sit dolore proident ut ea culpa sunt incididunt eu pariatur fugiat. Est exercitation sunt id Lorem et enim quis culpa. Reprehenderit cupidatat labore adipisicing nostrud exercitation adipisicing fugiat. Cillum sunt sit elit cillum qui veniam quis officia commodo do excepteur. Esse est ullamco id minim nulla sint. Sint eu enim tempor magna do minim. Ex occaecat laboris officia cillum aliqua ea.'
        ]);
    }
}
