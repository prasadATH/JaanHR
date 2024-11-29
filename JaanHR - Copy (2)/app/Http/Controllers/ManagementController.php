<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Payroll;
use App\Models\Leave;

class ManagementController extends Controller
{
    public function employeeManagement()
    {
        $employees = Employee::all();
        $section = "employee";
    
        return view('management.employee.employee-management', compact('section', 'employees'));

    }

    public function payrollManagement()
    {
        $payrolls = Payroll::all();
        return view('management.payroll.payroll-management', compact('payrolls'));
    }

    public function leaveManagement()
    {
        $leaves = Leave::all();
        return view('management.leave-management', compact('leaves'));
    }
}
