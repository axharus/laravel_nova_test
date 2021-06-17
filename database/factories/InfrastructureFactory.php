<?php

namespace Database\Factories;

use App\Models\Infrastructure;
use Illuminate\Database\Eloquent\Factories\Factory;

class InfrastructureFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Infrastructure::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->title(),
        ];
    }
}
