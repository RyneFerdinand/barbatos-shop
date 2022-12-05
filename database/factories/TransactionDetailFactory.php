<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\TransactionHeader;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransactionDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $product = Product::factory(1)->hasCategories(2)->create();
        return [
            'product_id' => $product[0]->id,
            'qty' => $this->faker->numberBetween(1, 100)
        ];
    }
}
