<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function show($section)
    {
        $data = [];

        if ($section == 'employee') {
            $data = [
                (object)['id' => 1, 'name' => 'John Doe', 'email' => 'john@example.com'],
                (object)['id' => 2, 'name' => 'Jane Smith', 'email' => 'jane@example.com'],
            ];
        } elseif ($section == 'payroll') {
            // Add payroll data
        } elseif ($section == 'leave') {
            // Add leave data
        }

        return view('management.employee-management', compact('section', 'data'));
    }
}
