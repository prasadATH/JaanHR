@extends('layouts.dashboard-layout')

@section('title', 'Payroll Management')

@section('content')
<!-- Main Content -->
<h1 class="text-3xl font-bold mb-6">Payroll Management</h1>

<div class="bg-white p-6 rounded shadow-md">
    <h2 class="text-2xl font-bold mb-4">Payroll Records</h2>

    <table class="w-full border-collapse border border-gray-300">
        <thead>
            <tr class="bg-gray-200">
                <th class="border border-gray-300 px-4 py-2">ID</th>
                <th class="border border-gray-300 px-4 py-2">Payroll Month</th>
                <th class="border border-gray-300 px-4 py-2">Employee</th>
                <th class="border border-gray-300 px-4 py-2">Net Salary</th>
                <th class="border border-gray-300 px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($payrolls as $payroll)
                <tr class="hover:bg-gray-100">
                    <td class="border border-gray-300 px-4 py-2">{{ $payroll->id }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $payroll->payroll_month }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $payroll->employee->first_name }} {{ $payroll->employee->last_name }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ number_format($payroll->net_salary, 2) }}</td>
                    <td class="border border-gray-300 px-4 py-2 flex space-x-4">
                        <!-- View Details -->
                        <a href="{{ route('payroll.details', $payroll->id) }}" class="text-blue-500 hover:underline">View</a>

                        <!-- Edit Payroll -->
                        <a href="{{ route('payroll.edit', $payroll->id) }}" class="text-green-500 hover:underline">Edit</a>

                        <!-- Delete Payroll -->
                        <form action="{{ route('payroll.destroy', $payroll->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this payroll record?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:underline">Remove</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="border border-gray-300 px-4 py-2 text-center">No payroll records found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
