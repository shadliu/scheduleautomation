<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Kids',
        ]);
        Category::create([
            'name' => 'Knit',
        ]);
        Category::create([
            'name' => 'Oven',
        ]);
        Category::create([
            'name' => 'Sweater',
        ]);
    }
}
