<?php

namespace Database\Seeders;

use App\Models\Dimension;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DimensionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //         Número	Figura (cm)	Paisaje (cm)
        // 1	22 x 16	22 x 14
        // 2	24 x 19	24 x 16
        // 3	27 x 22	27 x 19
        // 4	33 x 24	33 x 22
        Dimension::create([
            'figure' => '22 x 16',
            'scenery' => '22 x 14'
        ]);
        Dimension::create([
            'figure' => '24 x 19',
            'scenery' => '24 x 16'
        ]);
        Dimension::create([
            'figure' => '27 x 22',
            'scenery' => '27 x 19'
        ]);
        Dimension::create([
            'figure' => '33 x 24',
            'scenery' => '33 x 22'
        ]);
    }
}
