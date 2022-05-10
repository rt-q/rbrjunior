<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Comment;
use App\Models\Post;

class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // Comment (id, post_id, content, author, timestamp)
        return [
            'post_id' => Post::factory(),
            'content' => $this->faker->paragraph(),
            'author' => $this->faker->randomDigit()
        ];
    }
}
