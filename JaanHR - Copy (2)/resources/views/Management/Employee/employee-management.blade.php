@extends('layouts.dashboard-layout')

@section('title', 'Employee Management')

@section('content')
<!-- Main Content -->
<h1 class="text-3xl font-bold mb-6">Employee Management</h1>

<div class="bg-white p-6 rounded shadow-md">
    <h2 class="text-2xl font-bold mb-4">Employee List</h2>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @forelse ($employees as $employee)
            <div 
                class="bg-gray-100 p-4 rounded shadow-md hover:bg-gray-200 cursor-pointer"
                onclick="window.location.href='{{ route('employee.details', $employee->id) }}'"
            >
                <h3 class="text-xl font-bold">{{ $employee->first_name }} {{ $employee->last_name }}</h3>
                <p class="text-gray-600">Email: {{ $employee->email }}</p>
                <p class="text-gray-600">Position: {{ $employee->position->title ?? 'N/A' }}</p>
            </div>
        @empty
            <p class="text-center col-span-3">No employees found.</p>
        @endforelse
    </div>
</div>
@endsection
