<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tweet>
 */
class TweetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'link' => fake()->link(),
            'content' => fake()->content(),
            'datetweet' => Carbon::now()->subDays(random_int(1, 30)), // Exemple: date aléatoire dans les 30 derniers jours
        ];
    }
}
