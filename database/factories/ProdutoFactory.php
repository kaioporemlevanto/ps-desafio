<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produto>
 */
class ProdutoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'descricao' => $this->faker->realText(50),
            'quantidade' => $this->faker->randomDigitNotNull(),
            'preco' => $this->faker->randomFloat(2, 10, 50),
        ];
    }
}
