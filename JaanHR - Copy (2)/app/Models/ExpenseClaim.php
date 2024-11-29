<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExpenseClaim extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'description',
        'amount',
        'submitted_date',
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
