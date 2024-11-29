<?php

namespace App\Http\Controllers;

use App\Models\Payroll;
use Illuminate\Http\Request;

class PayrollController extends Controller
{
    // Display the card view for payroll records
    public function index()
    {
        $payrolls = Payroll::with('employee')->get(); // Load related employee data
        return view('management.payroll.payroll-management', compact('payrolls'));
    }

    // Display details of a specific payroll record
    public function show($id)
    {
        $payroll = Payroll::with('employee')->findOrFail($id); // Load the related employee
        return view('management.payroll.payroll-details', compact('payroll'));
    }

    public function edit($id)
{
    $payroll = Payroll::with('employee')->findOrFail($id);
    return view('management.payroll.payroll-edit', compact('payroll'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'basic_salary' => 'required|numeric',
        'allowances' => 'nullable|numeric',
        'deductions' => 'nullable|numeric',
        'net_salary' => 'required|numeric',
    ]);

    $payroll = Payroll::findOrFail($id);
    $payroll->update($request->all());

    return redirect()->route('dashboard.payroll')->with('success', 'Payroll updated successfully!');
}

public function destroy($id)
{
    $payroll = Payroll::findOrFail($id);
    $payroll->delete();

    return redirect()->route('dashboard.payroll')->with('success', 'Payroll record deleted successfully!');
}

}

