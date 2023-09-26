<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Post::class;
    
    public function definition()
    {
        
        return [
            'user_id' => User::factory(),
            'date' => now(),
            'title' => $this->faker->word,
            'brand_shoe' => $this->faker->word,
            'usage' => $this->faker->word,
            'size' => $this->faker->numberBetween(20, 30),
            'weight' => $this->faker->numberBetween(20, 30),
            'review' => $this->faker->realText(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
