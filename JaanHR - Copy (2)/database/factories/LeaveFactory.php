<?php

namespace Database\Factories;

use App\Models\Leave;
use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

class LeaveFactory extends Factory
{
    protected $model = Leave::class;

    public function definition()
    {
        // Generate the start date
        $start_date = $this->faker->dateTimeBetween('-1 month', '+1 month')->format('Y-m-d');

        // Ensure the end date is after the start date
        $end_date = $this->faker->dateTimeBetween($start_date, $start_date . ' +5 days')->format('Y-m-d');

        return [
            'employee_id' => Employee::factory(),
            'start_date' => $start_date,
            'leave_type' => $this->faker->randomElement(['Sick Leave', 'Vacation', 'Casual Leave', 'Maternity Leave']),
            'end_date' => $end_date,
            'reason' => $this->faker->sentence(),
            'status' => $this->faker->randomElement(['pending', 'approved', 'rejected']),
            'comments' => $this->faker->optional()->sentence(),
        ];
    }
}

