@extends('layouts.dashboard-layout')

@section('title', 'Payroll Details')

@section('content')
<!-- Main Content -->
<h1 class="text-3xl font-bold mb-6">Payroll Details</h1>

<div class="bg-white p-6 rounded shadow-md">
    <h2 class="text-2xl font-bold mb-4">Payroll for {{ $payroll->payroll_month }}</h2>
    <p><strong>Employee Name:</strong> {{ $payroll->employee->first_name }} {{ $payroll->employee->last_name }}</p>
    <p><strong>Basic Salary:</strong> {{ number_format($payroll->basic_salary, 2) }}</p>
    <p><strong>Allowances:</strong> {{ number_format($payroll->allowances, 2) ?? 'N/A' }}</p>
    <p><strong>Deductions:</strong> {{ number_format($payroll->deductions, 2) ?? 'N/A' }}</p>
    <p><strong>Net Salary:</strong> {{ number_format($payroll->net_salary, 2) }}</p>
    <p><strong>Generated At:</strong> {{ $payroll->created_at->format('d M Y, H:i:s') }}</p>
    <p><strong>Last Updated:</strong> {{ $payroll->updated_at->format('d M Y, H:i:s') }}</p>

    <button 
        onclick="window.history.back()" 
        class="bg-blue-500 text-white px-4 py-2 rounded mt-4 hover:bg-blue-600"
    >
        Back to Payroll List
    </button>
</div>
@endsection
