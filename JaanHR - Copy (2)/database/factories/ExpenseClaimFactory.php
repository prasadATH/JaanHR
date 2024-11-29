<?php

namespace Database\Factories;

use App\Models\ExpenseClaim;
use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

class ExpenseClaimFactory extends Factory
{
    protected $model = ExpenseClaim::class;

    public function definition()
    {
        return [
            'employee_id' => Employee::factory(), // Generates a related employee
            'description' => $this->faker->sentence(), // Random short description
            'amount' => $this->faker->randomFloat(2, 50, 2000), // Random amount between 50 and 2000
            'submitted_date' => $this->faker->dateTimeBetween('-6 months', 'now')->format('Y-m-d'),
            'status' => $this->faker->randomElement(['pending', 'approved', 'rejected']),
        ];
    }
}

