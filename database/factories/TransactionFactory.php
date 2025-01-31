<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaction>
 */
class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'transaction_title'=>fake()->name(),
            'description'=>fake()->text(),
            'status'=>fake()->randomElement(['successful','declined']),
            'total_amount'=>fake()->randomDigit(),
            'transaction_number'=>fake()->randomDigit()
            ];
    }
}
