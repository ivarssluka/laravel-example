<?php

namespace Database\Factories;

use App\Models\Employer;
use App\Models\Job;
use Illuminate\Database\Eloquent\Factories\Factory as FactoryAlias;

/**
 * @extends FactoryAlias<Job>
 */
class JobFactory extends FactoryAlias
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->jobTitle(),
            'employer_id' => Employer::factory(),
            'salary' => "$" . number_format(fake()->numberBetween(20000, 100000)),
        ];
    }
}
