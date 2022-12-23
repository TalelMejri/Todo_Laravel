<?php

namespace Database\Factories;

use App\Models\Categorie;
use App\Models\User;
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
    public function definition()
    {
        return [
            "titel"=>$this->faker->sentence(),
            "body"=>$this->faker->text(),
            "image"=>$this->faker->imageUrl(640,480,'animals',false),
            "user_id"=>User::get('id')->random(),
            "categorie_id"=>Categorie::get('id')->random(),
            "created_at"=>now()
        ];
    }
}
