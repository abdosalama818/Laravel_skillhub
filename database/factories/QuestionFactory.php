<?php

namespace Database\Factories;

use App\Models\Question;
use Illuminate\Database\Eloquent\Factories\Factory;

class QuestionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Question::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
          "title"=>$this->faker->sentence(),
          "option1"=>$this->faker->sentence(5,true),
          "option2"=>$this->faker->sentence(5,true),
          "option3"=>$this->faker->sentence(5,true),
          "option4"=>$this->faker->sentence(5,true),
          "rigth_answer"=>$this->faker->numberBetween(1,4)
        ];
    }
}
