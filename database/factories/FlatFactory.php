<?php

namespace Database\Factories;

use App\Models\Flat;
use Illuminate\Database\Eloquent\Factories\Factory;

class FlatFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Flat::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->text(10),
            'description'=>$this->faker->text(400),
            'price'=>$this->faker->numberBetween(1000,200000),
            'conditions'=>$this->faker->text(400),
            'quantityBalcony'=>$this->faker->numberBetween(5,13),
            'quantityBathroom'=>$this->faker->numberBetween(1,10),
            'square'=>$this->faker->numberBetween(20,500),
            'distanceToSea'=>$this->faker->numberBetween(0,1000),
            'end_date'=>$this->faker->dateTimeBetween('-1 year', '1 year'),

        ];
    }
}
