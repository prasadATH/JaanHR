<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'address',
        'date_of_birth',
        'gender',
        'department_id',
        'position_id',
        'manager_id',
        'employment_start_date',
        'employment_end_date',
    ];

    /**
     * Relationship: Department
     */
    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    /**
     * Relationship: Position
     */
    public function position()
    {
        return $this->belongsTo(Position::class);
    }

    /**
     * Relationship: Manager
     */
    public function manager()
    {
        return $this->belongsTo(Employee::class, 'manager_id');
    }

    /**
     * Relationship: Subordinates
     */
    public function subordinates()
    {
        return $this->hasMany(Employee::class, 'manager_id');
    }
}

