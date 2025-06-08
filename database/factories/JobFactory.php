<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Employer;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    
    public function definition(): array
    {
        return [
            'employer_id' => Employer::factory(),
            'title' => fake()->jobTitle,
            'salary' => fake()->randomElement(['$50,000 USD', '$60,000 USD', '$70,000 USD']),
            'location' => 'Remote',
            'schedule' => fake()->randomElement(['Full time', 'Part time']),
            'url' => fake()->url,
            'featured' => false
        ];
    }
}
