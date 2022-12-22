<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "comment"=>$this->faker()->sentence(),
            "user_id"=>User::get('id')->random(),
            "post_id"=>Post::get('id')->random(),
            "created_at"=>now()
        ];
    }
}
