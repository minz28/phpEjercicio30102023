<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Nombre' => $this->faker->words(2, true),
            'Precio' => $this->faker->numberBetween(990, 20990),
            'IdCategoria' => $this->faker->numberBetween(1, 3)
        ];
    }
}
