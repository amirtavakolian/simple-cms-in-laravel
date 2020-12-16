<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Model::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->randomDigit,
            'title' => $this->faker->realText($maxNbChars = 100, $indexSize = 2),
            'auther' => $this->faker->firstNameFemale,
            'text' => $this->faker->realText($maxNbChars = 300, $indexSize = 2)
        ];
    }
}
