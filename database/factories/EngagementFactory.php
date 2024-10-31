<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Engagement>
 */
class EngagementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => fake()->uuid(),
            'member_id' => fake()->uuid(),
            'messages_sent' => fake()->numberBetween(10000, 750000),
            'messages_received' => fake()->numberBetween(10000, 750000),
            'response_rate' => fake()->randomNumber(),
            'last_interaction' => fake()->dateTimeBetween('-1 years', 'now')
        ];
    }
}
