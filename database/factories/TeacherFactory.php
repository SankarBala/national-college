<?php

namespace Database\Factories;

use Faker\Core\Number;
use Illuminate\Database\Eloquent\Factories\Factory;

class TeacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'teacher_id' =>$this->faker->randomNumber(6),
            'name' => $this->faker->name,
            'phone' => $this->faker->phoneNumber,
            'email' => $this->faker->email,
            'designation' => $this->faker->word,
            'photo' => $this->faker->imageUrl(640, 480, 'people'),
        ];
    }
}
