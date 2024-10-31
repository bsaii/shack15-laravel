<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Member>
 */
class MemberFactory extends Factory
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
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'joined_date' => fake()->dateTimeBetween('-2 years', 'now'),
            'last_active_date' => fake()->dateTimeBetween('-1 year', 'now'),
            'status' => fake()->randomElement(['active', 'inactive']),
        ];
    }
}
