<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EventAttendance>
 */
class EventAttendanceFactory extends Factory
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
            'attended_date' => fake()->dateTimeBetween('-1 years', 'now')
        ];
    }
}