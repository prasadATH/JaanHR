<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>@yield('title', 'Dashboard')</title>
    @vite(['resources/js/app.js'])
</head>
<body class="bg-gray-100">
    <div class="container mx-auto mt-10 flex">
        <!-- Sidebar Menu -->
        <div class="w-1/4 bg-white shadow-md p-6 rounded">
            <h2 class="text-2xl font-bold mb-4">Menu</h2>
            <ul>
                <li class="mb-2">
                    <a href="{{ route('employee.management', 'employee.management') }}" class="block px-4 py-2 rounded {{ request()->is('dashboard/employee') ? 'bg-gray-200 font-bold' : '' }}">Employee Management</a>
                </li>
                <li class="mb-2">
                    <a href="{{ route('payroll.management', 'payroll') }}" class="block px-4 py-2 rounded {{ request()->is('dashboard/payroll') ? 'bg-gray-200 font-bold' : '' }}">Payroll Management</a>
                </li>
                <li class="mb-2">
                    <a href="{{ route('dashboard.section', 'leave') }}" class="block px-4 py-2 rounded {{ request()->is('dashboard/leave') ? 'bg-gray-200 font-bold' : '' }}">Leave Management</a>
                </li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="w-3/4 ml-6">
            @yield('content')
        </div>
    </div>
</body>
</html>
