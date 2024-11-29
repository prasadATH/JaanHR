<?php

namespace Database\Factories;

use App\Models\Attendance;
use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

class AttendanceFactory extends Factory
{
    protected $model = Attendance::class;

    public function definition()
    {
        return [
            'employee_id' => Employee::factory(), // Generates a related employee
            'date' => $this->faker->dateTimeBetween('-1 year', 'now')->format('Y-m-d'),
            'clock_in_time' => $this->faker->optional(0.9)->time('H:i:s'), // 90% chance of being present
            'clock_out_time' => $this->faker->optional(0.9)->time('H:i:s'), // 90% chance of being present
            'status' => $this->faker->randomElement(['present', 'absent', 'on leave']),
        ];
    }
}
