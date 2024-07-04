<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Brand::create([
            'name' => 'Lenovo',
            'slug' => 'lenovo'
        ]);
        Brand::create([
            'name' => 'Asus',
            'slug' => 'asus'
        ]);
        Brand::create([
            'name' => 'Apple',
            'slug' => 'apple'
        ]);
    }
}
