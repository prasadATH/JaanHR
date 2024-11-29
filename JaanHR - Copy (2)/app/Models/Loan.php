<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'loan_amount',
        'amount_paid',
        'remaining_balance',
        'loan_start_date',
        'loan_end_date',
        'interest_rate',
        'status',
    ];

    /**
     * Relationship: Employee
     */
    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
