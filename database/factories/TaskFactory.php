<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{

    public function definition()
    {
        return [
            'title'       => $this->faker->text(67),
            'description' => $this->faker->text(500),
            'created_at'  => $this->faker->dateTime(),
        ];
    }
}
