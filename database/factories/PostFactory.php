<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Post>
 */
class PostFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(),
            'author' => $this->faker->name(),
            'slug' => $this->faker->unique()->slug(),
            'body' => $this->faker->paragraphs(3, true),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}