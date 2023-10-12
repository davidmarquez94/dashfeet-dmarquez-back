<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Active;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Active>
 */
class ActiveFactory extends Factory
{

    protected $model = Active::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->text(15),
            'description' => fake()->text(50),
            'price' => fake()->numberBetween(1000, 1000000)
        ];
    }
}
