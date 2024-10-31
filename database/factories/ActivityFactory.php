<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Activity>
 */
class ActivityFactory extends Factory
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
            'year' => fake()->year('-1'),
            'active_days' => fake()->numberBetween(5, 25),
            'messages_sent' => fake()->numberBetween(1800, 55000),
            'events_attended' => fake()->numberBetween(200, 800)
        ];
    }
}
