<?php

namespace Database\Factories;

use App\Models\Video;
use Illuminate\Database\Eloquent\Factories\Factory;

class VideoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Video::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->colorName,
            'description' => $this->faker->paragraph(20),
            'series_id' => $this->faker->numberBetween(1,10),
            'episode_number' => $this->faker->numberBetween(1,15)
        ];
    }
}
