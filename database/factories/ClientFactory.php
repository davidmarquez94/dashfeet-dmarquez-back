<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Client;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    protected $model = Client::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $document_types = [
            'CC',
            'NIT',
            'PN'
        ];
        return [
            'name' => fake()->name(),
            'document_type' => $document_types[array_rand($document_types)],
            'document' => fake()->numberBetween('11111111', '9999999999'),
            'email' => fake()->email(),
            'phone' => fake()->phoneNumber()
        ];
    }
}
