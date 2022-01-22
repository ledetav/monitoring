<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MeasurementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $getTimeStart = $this->faker->dateTimeBetween('-1 year', '-10 days');
        return [
            'station_id' => $this->faker->numberBetween(1, 15),
            'time_start' => $getTimeStart,
            'time_end' => $this->faker->dateTimeBetween($getTimeStart, '-10 days'),
            'reactive_powerA' => $this->faker->randomFloat(2, 0, 100),
            'reactive_powerB' => $this->faker->randomFloat(2, 0, 100),
            'reactive_powerC' => $this->faker->randomFloat(2, 0, 100),
            'active_powerA' => $this->faker->randomFloat(2, 0, 100),
            'active_powerB' => $this->faker->randomFloat(2, 0, 100),
            'active_powerC' => $this->faker->randomFloat(2, 0, 100),
            'voltageA' => $this->faker->randomFloat(2, 0, 100),
            'voltageB' => $this->faker->randomFloat(2, 0, 100),
            'voltageC' => $this->faker->randomFloat(2, 0, 100),
            'cosA' => $this->faker->randomFloat(2, -1, 1),
            'cosB' => $this->faker->randomFloat(2, -1, 1),
            'cosC' => $this->faker->randomFloat(2, -1, 1),
            'reactive_powerA_off' => $this->faker->randomFloat(2, 0, 100),
            'reactive_powerB_off' => $this->faker->randomFloat(2, 0, 100),
            'reactive_powerC_off' => $this->faker->randomFloat(2, 0, 100),
            'active_powerA_off' => $this->faker->randomFloat(2, 0, 100),
            'active_powerB_off' => $this->faker->randomFloat(2, 0, 100),
            'active_powerC_off' => $this->faker->randomFloat(2, 0, 100),
            'voltageA_off' => $this->faker->randomFloat(2, 0, 100),
            'voltageB_off' => $this->faker->randomFloat(2, 0, 100),
            'voltageC_off' => $this->faker->randomFloat(2, 0, 100),
            'cosA_off' => $this->faker->randomFloat(2, -1, 1),
            'cosB_off' => $this->faker->randomFloat(2, -1, 1),
            'cosC_off' => $this->faker->randomFloat(2, -1, 1),
            'enabled_blocks' => $this->faker->randomNumber(1, 10),
        ];
    }
}
