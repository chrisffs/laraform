<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Intern>
 */
class InternFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'firstName' => fake()->firstName(),
            'midName' => fake()->randomLetter(),
            'lastName' => fake()->lastName(),
            'internCategory' => 'Web Developer',
            'school' => 'Technological University of the Philippines Visayas',
            'onboardingDate' => fake()->date()
        ];
    }
}
