<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => 1,
            'slug' => $this->faker->slug,
            'seo_title' => $this->faker->sentence,
            'seo_description' => $this->faker->sentence,
            'heading' => $this->faker->sentence,
            'body' => $this->faker->paragraph,
        ];
    }
}
