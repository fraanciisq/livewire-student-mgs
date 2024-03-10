<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' => $this->faker->firstName,
            'middle_name' => $this->faker->lastName, // Changed to firstName and lastName
            'last_name' => $this->faker->lastName, // Changed to lastName
            'birth_date' => $this->faker->date,
            'photo' => $this->faker->randomElement([null, $this->faker->image()]), // Nullable photo
            'address' => $this->faker->address,
            'email' => $this->faker->unique()->safeEmail,
            // 'class_id' => \App\Models\ClassModel::factory()->create()->id, // Replace 'ClassModel' with your actual class model
            // 'section_id' => \App\Models\Section::factory()->create()->id, // Replace 'Section' with your actual section model
            // // 'created_at' => now(),
            // 'updated_at' => now(),
        ];
    }
}
