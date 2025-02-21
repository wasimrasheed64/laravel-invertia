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
            'short_description' => $this->faker->sentence,
            'image' => 'https://images.unsplash.com/photo-1599009434802-ca1dd09895e7?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
        ];
    }
}
