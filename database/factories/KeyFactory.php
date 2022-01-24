<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class KeyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 15),
            'station_id' => $this->faker->numberBetween(1, 15)
        ];
    }
}
