<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LoadCell>
 */
class LoadCellFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'date' => $this->faker->date(),
            'time' => $this->faker->time(),
            's1' => $this->faker->randomFloat(2,0,100),
            's2' => $this->faker->randomFloat(2,0,100),
            's3' => $this->faker->randomFloat(2,0,100),
            's4' => $this->faker->randomFloat(2,0,100),
        ];
    }
}
