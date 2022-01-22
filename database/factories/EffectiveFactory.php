<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EffectiveFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'station_id' => $this->faker->numberBetween(1, 15),
            'measurement_id' => $this->faker->unique()->numberBetween(1, 30),
            'effective_power_on' => $this -> faker ->numberBetween(1, 200),
            'effective_power_off' => $this -> faker ->numberBetween(1, 200),
            'effective' => $this -> faker ->numberBetween(10, 100),
        ];
    }
}
