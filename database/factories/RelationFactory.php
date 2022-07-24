<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RelationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->name(),
            'last_name' => $this->faker->name(),
            'city' => $this->faker->name(),
            'postcode' => $this->faker->numberBetween(10000,90000),
        ];
    }
}
