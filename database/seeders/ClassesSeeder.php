<?php

namespace Database\Seeders;

use App\Models\Classes; // Import the Classes model
use App\Models\Section; // Import the Section model
use App\Models\Student; // Import the Student model
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class ClassesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Classes::factory()
            ->count(10)
            ->sequence(fn($sequence) => ['name' => 'Class ' . ($sequence->index + 1)]) // Corrected sequence generation
            ->has(
                Section::factory()
                    ->count(2)
                    ->state(new Sequence(
                        ['name' => 'Section A'],
                        ['name' => 'Section B']
                    ))
                    ->has(
                        Student::factory()
                            ->count(5)
                            ->state(function (array $attributes, Section $section) {
                                return ['class_id' => $section->class_id];
                            })
                    )
            )
            ->create();
    }
}
