<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Computer',
            'slug' => 'lenovo'
        ]);
        Category::create([
            'name' => 'Phone',
            'slug' => 'asus'
        ]);
        Category::create([
            'name' => 'Watch',
            'slug' => 'apple'
        ]);
    }
}
