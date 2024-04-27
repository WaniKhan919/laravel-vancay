<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
             'title' => fake()->sentence(),
             'sub_title' => fake()->sentence(),
             'description' => fake()->realText(),
             'created_at' => time(),
            'updated_at' => time(),
            'category_id' => rand(1,3),
        ];
    }
}
