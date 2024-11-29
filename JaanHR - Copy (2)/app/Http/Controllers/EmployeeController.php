<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{

    public function GetAllEmployees()
    {
        // Fetch all employees
        $employees = Employee::all(); // Fetch all employee data from the database
        $section = "employee";
    
        return view('management.employee-management', compact('section', 'employees'));
    }

     // Display the employee management card view
     public function index()
     {
         $employees = Employee::with(['position', 'department'])->get(); // Load relationships
         return view('management.employee.employee-management', compact('employees'));
     }
 
     // Display the detailed view for a specific employee
     public function show($id)
     {
         $employee = Employee::with(['position', 'department'])->findOrFail($id);
         return view('management.employee.employee-details', compact('employee'));
     }

    public function update(Request $request)
    {
        $employee = Employee::findOrFail($request->id);
        $employee->update($request->all());
        return response()->json(['message' => 'Employee updated successfully']);
    }

    public function delete($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();
        return response()->json(['message' => 'Employee deleted successfully']);
    }
}
