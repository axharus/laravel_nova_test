<?php

namespace Database\Factories;

use App\Models\Complex;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ComplexFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Complex::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->text(30);
        return [
            'title' => $title,
            'slug'=>Str::slug($title),
            'description'=>$this->faker->text(400),
            'price'=>$this->faker->numberBetween(1000,200000),
            'conditions'=>$this->faker->text(400),
            'square'=>$this->faker->numberBetween(20,500),
            'distanceToSea'=>$this->faker->numberBetween(0,1000),
            'end_date'=>$this->faker->dateTimeBetween('-1 year', '1 year'),
        ];
    }
}
