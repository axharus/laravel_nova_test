<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
        $title = $this->faker->text(40);
        return [
            'title' => $title,
            'slug'=>Str::slug($title),
            'content_raw'=>$this->faker->text(400),
            'created_at'=>$this->faker->dateTimeBetween('-2 months', '-1 days'),
        ];
    }
}
