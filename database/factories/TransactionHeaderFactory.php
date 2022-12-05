<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransactionHeaderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'transaction_date' => $this->faker->date($format='Y-m-d', $max = 'now'),
            'user_id' => User::factory(1)->create()[0]->id
        ];
    }
}
