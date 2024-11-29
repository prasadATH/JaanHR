<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payroll extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'payroll_month',
        'basic_salary',
        'allowances',
        'deductions',
        'net_salary',
    ];

    /**
     * Relationship: Employee
     */
    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
