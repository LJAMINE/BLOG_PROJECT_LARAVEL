<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\article>
 */
class ArticleFactory extends Factory
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
'user_id'=>User::factory(),
'content'=>fake()->paragraph(),
'status' => 'unpublished', 
'category_id'=>Category::factory(),
'created_at' => now(),
'updated_at' => now(),
        ];
    }
}
