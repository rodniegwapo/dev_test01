<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        'user_id' => $this->faker(\App\Models\User::class),
         'title' => $this->faker->sentence,
         'body' => $this->faker->paragraph
        ];
    }
}
