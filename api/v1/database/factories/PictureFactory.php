<?php

namespace Database\Factories;

use Database\Seeders\CountrySeeder;
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
        $countries = CountrySeeder::countryList();
        return [
            'name' => fake()->name(),
            'painter' => fake()->name(),
            'description' => fake()->text(),
            'image' => fake()->imageUrl(640, 480, 'pictures', true),            
            'country_code' => $countries[rand(0, 247)]['code'],
            'category_id' => rand(1, 4),
            'dimension_id' => rand(1, 4),
            'painter_id' => rand(1, 100),
            'country_id' => rand(1, 248),

        ];
    }
}
