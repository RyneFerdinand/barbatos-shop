<?php

namespace Database\Factories;

use App\Models\Category;
use Faker\Factory as FakerFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'detail' => $this->faker->paragraph(),
            'price' => $this->faker->numberBetween($min = 20000, $max = 2000000),
            'photo' => $this->faker->imageUrl($width = 200, $height = 200),
            'category_id' => Category::factory(1)->create()[0]->id
        ];
    }
}
