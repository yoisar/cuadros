<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            'cat_name' => 'Impresionismo'
        ]);
        Category::create([
            'cat_name' => 'Expresionismo'
        ]);
        Category::create([
            'cat_name' => 'Arte abstracto'
        ]);
        Category::create([
            'cat_name' => 'Arte Pop'
        ]);
    }
}
