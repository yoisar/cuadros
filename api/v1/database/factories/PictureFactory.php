<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Picture>
 */
class PictureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'pic_name' => fake()->name(),
            'description' => fake()->text(),
            'image' => fake()->imageUrl(640, 480, 'pictures', true),
            'category_id' => rand(1, 4),
            'dimension_id' => rand(1, 4),
            'painter_id' => rand(1, 100)

        ];
    }
}
