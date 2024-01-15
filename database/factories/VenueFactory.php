<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Venue;

class VenueFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Venue::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'description' => $this->faker->text(),
            'region' => $this->faker->word(),
            'startingDate' => $this->faker->dateTime(),
            'endingDate' => $this->faker->dateTime(),
            'status' => $this->faker->randomElement(["WIP","Cancelled","On"]),
        ];
    }
}
