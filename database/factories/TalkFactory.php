<?php

namespace Database\Factories;

use App\Enums\TalkType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Talk>
 */
class TalkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->title(),
            'abstract' => $this->faker->paragraph,
            'length' => $this->faker->randomElement(['15', '30', '45', '60']),
            'type' => $this->faker->randomElement(TalkType::cases())->value,
            'organizer_note' => $this->faker->paragraph,
            'author_id' => \App\Models\User::factory(),
        ];
    }
}
