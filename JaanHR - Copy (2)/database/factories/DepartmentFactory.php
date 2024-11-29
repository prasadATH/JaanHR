<?php

namespace Database\Factories;

use App\Models\Department;
use Illuminate\Database\Eloquent\Factories\Factory;

class DepartmentFactory extends Factory
{
    protected $model = Department::class;

    public function definition()
    {
        return [
            'name' => $this->faker->company(),
            'description' => $this->faker->sentence(),
            'parent_id' => rand(0, 1) ? Department::factory() : null, // Randomly assign a parent department
        ];
    }
}

