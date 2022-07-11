<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SubscriptionProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'upload_speed' => $this->faker->numberBetween(50,500),
            'download_speed' => $this->faker->numberBetween(50,500),
            'technology' => $this->faker->randomElement(['fiber', 'dialup']),
            'static_ip' => $this->faker->randomElement([0, 1]),
        ];
    }
}
