<?php

namespace Database\Factories;

use App\Models\Employee;
use App\Models\Department;
use App\Models\Position;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    protected $model = Employee::class;

    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'email' => $this->faker->unique()->safeEmail(),
            'phone' => $this->faker->phoneNumber(),
            'address' => $this->faker->address(),
            'date_of_birth' => $this->faker->date('Y-m-d', '2000-01-01'),
            'gender' => $this->faker->randomElement(['Male', 'Female', 'Other']),
            'department_id' => Department::factory(), // Generates a related department
            'position_id' => Position::factory(), // Generates a related position
            'manager_id' => null, // By default, no manager
            'employment_start_date' => $this->faker->date('Y-m-d', '-5 years'),
            'employment_end_date' => $this->faker->optional()->date('Y-m-d', '+5 years'),
        ];
    }
}

