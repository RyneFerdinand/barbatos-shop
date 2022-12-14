<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CartFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $product = Product::factory(1)->create();
        return [
            // 'user_id' => User::factory(1)->create()[0]->id,
            'product_id' => $product[0]->id,
            'qty' => $this->faker->numberBetween(1, 100)
        ];
    }
}
