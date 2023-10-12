<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Shipment;
use App\Models\Client;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Shipment>
 */
class ShipmentFactory extends Factory
{
    protected $model = Shipment::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $statuses = [
            'dispatched', 
            'in_transit', 
            'delivered'
        ];
        return [
            'code' => fake()->isbn10(),
            'delivery_address' => fake()->address(),
            'status' => $statuses[array_rand($statuses)],
            'delivery_date' => fake()->dateTime(),
            'client_id' => Client::factory()
        ];
    }
}