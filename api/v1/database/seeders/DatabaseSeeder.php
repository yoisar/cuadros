<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Dimension;
use App\Models\Painter;
use App\Models\Picture;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //seed pictures painters 
        Painter::factory(100)->create();
        //seed pictures categories
        // Category::factory(100)->create();
        // //seed pictures dimensions
        // Dimension::factory(100)->create();
        // //seed pictures
        // Picture::factory(100)->create();
    }
}
