<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'category_name' => 'Gemüse 1',
            'fa_name' => 'fas fa-carrot',
            'price' => 1.50,
        ]);

        Category::create([
            'category_name' => 'Gemüse 2',
            'fa_name' => 'fas fa-pepper-hot',
            'price' => 1.50,
        ]);

        Category::create([
            'category_name' => 'Extras',
            'fa_name' => 'fas fa-egg',
            'price' => 2.00,
        ]);

        Category::create([
            'category_name' => 'Käse',
            'fa_name' => 'fas fa-cheese',
            'price' => 2.00,
        ]);

        Category::create([
            'category_name' => 'Fisch',
            'fa_name' => 'fas fa-fish',
            'price' => 2.50,
        ]);

        Category::create([
            'category_name' => 'Fleisch',
            'fa_name' => 'fas fa-bacon',
            'price' => 2.50,
        ]);

        Category::create([
            'category_name' => 'Lambda',
            'fa_name' => null,
            'price' => 7.00,
        ]);
    }
}
