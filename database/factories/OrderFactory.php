<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Order::class;

    public function definition(): array
    {
        return [
            'total_price' => 0,
            'username' => $this->faker->userName,
            'order_code' => strtoupper('ORD-' . $this->faker->unique()->bothify('###??')),
            'status' => $this->faker->randomElement([ 'completed', 'cancelled']),
        ];
    }
}
