@extends('layouts.dashboard-layout')

@section('title', 'Edit Payroll')

@section('content')
<!-- Main Content -->
<h1 class="text-3xl font-bold mb-6">Edit Payroll</h1>

<div class="bg-white p-6 rounded shadow-md">
    <form action="{{ route('payroll.update', $payroll->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2">Basic Salary</label>
            <input type="text" name="basic_salary" value="{{ $payroll->basic_salary }}" class="w-full p-2 border rounded">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2">Allowances</label>
            <input type="text" name="allowances" value="{{ $payroll->allowances }}" class="w-full p-2 border rounded">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2">Deductions</label>
            <input type="text" name="deductions" value="{{ $payroll->deductions }}" class="w-full p-2 border rounded">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2">Net Salary</label>
            <input type="text" name="net_salary" value="{{ $payroll->net_salary }}" class="w-full p-2 border rounded">
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update Payroll</button>
        <a href="{{ route('dashboard.payroll') }}" class="bg-gray-500 text-white px-4 py-2 rounded ml-4">Cancel</a>
    </form>
</div>
@endsection
