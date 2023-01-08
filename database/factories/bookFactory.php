<?php

namespace Database\Factories;

use App\Models\auther;
use App\Models\category;
use App\Models\publisher;
use Illuminate\Database\Eloquent\Factories\Factory;

class bookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(4),
            'category_id' => category::factory(),
            'auther_id' => auther::factory(),
            'publisher_id' => publisher::factory(),
            'status' => 'Y'
        ];
    }
}
