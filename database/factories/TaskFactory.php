<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name_task' => fake()->name_task(),
            'status' => fake()->status(),
            'assignee' => fake()->assignee(),
            'time_estimate' => fake()->time_estimate(),
            //random range 1-4
            'user_id' => fake()->numberBetween(1, 4),
        ];
    }
}
