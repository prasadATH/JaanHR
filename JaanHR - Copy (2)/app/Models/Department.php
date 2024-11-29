<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'parent_id',
    ];

    /**
     * Relationship: Parent Department
     */
    public function parent()
    {
        return $this->belongsTo(Department::class, 'parent_id');
    }

    /**
     * Relationship: Child Departments
     */
    public function children()
    {
        return $this->hasMany(Department::class, 'parent_id');
    }
}

