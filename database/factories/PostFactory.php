<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->words(4, true);

        return [
            'user_id' => 1,
            'title' => ucfirst($title),
            'slug' => str_slug($title),
            'text' => $this->faker->paragraphs(5, true),
        ];
    }
}
