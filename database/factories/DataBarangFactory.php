<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DataBarang>
 */
class DataBarangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'merk' => $this->faker->company(),
            'seri' => $this->faker->regexify('[A-Z]{5}[0-4]{3}'),
            'berat_per_box' => $this->faker->randomFloat(2,0,100),
            'jumlah' => $this->faker->numberBetween(0, 100),
            'rak' => $this->faker->regexify('[A]{1}[1-3]{1}'),
        ];
    }
}
