<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Conference>
 */
class ConferenceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $startsAt = now()->addMonth(6);
        $endsAt = $startsAt->copy()->addDays(3);
        $cfpStartsAt = $startsAt->copy()->subMonths(4);
        $cfpEndsAt = $startsAt->copy()->subMonths(2);
        return [
            'title' => $this->faker->sentence,
            'url' => $this->faker->url,
            'description' => $this->faker->paragraph,
            'location' => $this->faker->city . ', ' . $this->faker->country,
            'start_at' => $startsAt,
            'end_at' => $endsAt,
            'cfp_start_at' => $cfpStartsAt,
            'cfp_end_at' => $cfpEndsAt,
        ];
    }
}
