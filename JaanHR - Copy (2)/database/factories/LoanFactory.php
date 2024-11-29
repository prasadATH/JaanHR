<?php

namespace Database\Factories;

use App\Models\Loan;
use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

class LoanFactory extends Factory
{
    protected $model = Loan::class;

    public function definition()
    {
        $loan_amount = $this->faker->randomFloat(2, 500, 10000); // Random loan amount between 500 and 10,000
        $amount_paid = $this->faker->randomFloat(2, 0, $loan_amount); // Random amount paid up to the loan amount
        $remaining_balance = $loan_amount - $amount_paid;

        $loan_start_date = $this->faker->dateTimeBetween('-1 year', 'now')->format('Y-m-d');
        $loan_end_date = $this->faker->optional()->dateTimeBetween($loan_start_date, $loan_start_date . ' +1 year');

        return [
            'employee_id' => Employee::factory(),
            'loan_amount' => $loan_amount,
            'amount_paid' => $amount_paid,
            'remaining_balance' => $remaining_balance,
            'loan_start_date' => $loan_start_date,
            'loan_end_date' => $loan_end_date ? $loan_end_date->format('Y-m-d') : null, // Ensure null-safe format
            'interest_rate' => $this->faker->optional()->randomFloat(2, 1, 15), // Interest rate between 1% and 15%
            'status' => $this->faker->randomElement(['active', 'closed', 'defaulted']),
        ];
    }
}
