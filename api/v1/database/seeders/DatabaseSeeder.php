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
        $this->call(CategorySeeder::class);
        // seed pictures dimensions   
        $this->call(DimensionSeeder::class);
        //seed countries   
        $this->call(CountrySeeder::class);
        // seed pictures
        Picture::factory(100)->create();
    }
}
