@extends('layouts.dashboard-layout')

@section('title', 'Employee Details')

@section('content')
<!-- Main Content -->
<h1 class="text-3xl font-bold mb-6">Employee Details</h1>

<div class="bg-white p-6 rounded shadow-md">
    <h2 class="text-2xl font-bold mb-4">{{ $employee->first_name }} {{ $employee->last_name }}</h2>
    <p><strong>Email:</strong> {{ $employee->email }}</p>
    <p><strong>Phone:</strong> {{ $employee->phone }}</p>
    <p><strong>Position:</strong> {{ $employee->position->title ?? 'N/A' }}</p>
    <p><strong>Department:</strong> {{ $employee->department->name ?? 'N/A' }}</p>
    <p><strong>Address:</strong> {{ $employee->address }}</p>
    <p><strong>Date of Birth:</strong> {{ $employee->date_of_birth }}</p>
    <p><strong>Hire Date:</strong> {{ $employee->hire_date }}</p>
    <p><strong>Salary:</strong> {{ $employee->salary }}</p>
    <p><strong>Additional Notes:</strong> {{ $employee->notes }}</p>

    <button 
        onclick="window.history.back()" 
        class="bg-blue-500 text-white px-4 py-2 rounded mt-4 hover:bg-blue-600"
    >
        Back to Employee List
    </button>
</div>
@endsection
