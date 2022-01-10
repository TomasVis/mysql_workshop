<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $comment = $this->faker->realText(50);
        $secondComment = $this->faker->realText(50);
        return [
            'first' => $comment,
            'second' => $comment,
            'third' => $secondComment,
            'fourth' => $comment,
            'fifth' => $secondComment,
        ];
    }
}
