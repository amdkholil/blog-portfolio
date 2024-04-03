<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Post;

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
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(4),
            'slug' => $this->faker->slug(),
            'body' => $this->faker->text(),
            'thumbnail' => $this->faker->word(),
            'status' => $this->faker->word(),
            'views' => $this->faker->word(),
            'created_by' => $this->faker->word(),
            'published' => $this->faker->dateTime(),
        ];
    }
}
