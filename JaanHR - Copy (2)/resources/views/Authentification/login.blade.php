@extends('layouts.app')

@section('title', 'Login')

@section('content')
<body class="w-full h-screen flex">
    <!-- Left Section -->
    <div class="w-1/2 h-full bg-white flex flex-col justify-center items-center">
        <div class="w-full flex flex-col justify-center items-center space-y-4">
            <p class="text-6xl font-bold text-black">Welcome Back!</p>
            <p class="text-2xl text-[#00000099]">Enter the information you entered while registering</p>
        </div>

        <!-- Login Form -->
        <div class="w-1/2 p-8">
            @if(session('success'))
                <div class="bg-green-100 text-green-800 p-3 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif

            @if($errors->any())
                <div class="bg-red-100 text-red-800 p-3 rounded mb-4">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-4">
                    <label for="email" class="block text-xl font-bold text-black">Email</label>
                    <input type="email" id="email" name="email" class="w-full px-4 py-4 mt-1 border-2 border-[#1C1B1F80] rounded-md focus:outline-none focus:ring focus:ring-indigo-300" required>
                </div>
                <div class="mb-6">
                    <label for="password" class="block text-xl font-bold text-black">Password</label>
                    <input type="password" id="password" name="password" class="w-full px-4 py-4 mt-1 border-2 border-[#1C1B1F80] rounded-md focus:outline-none focus:ring focus:ring-indigo-300" required>
                </div>
                <div class="flex items-center justify-between mb-6">
                    <div class="flex items-center">
                        <div class="relative">
                            <input type="checkbox" id="remember" name="remember" class="h-8 w-8 appearance-none border border-gray-300 rounded focus:ring-indigo-500 checked:bg-gradient-to-r checked:from-[#184E77] checked:via-[#52B69A] checked:to-[#184E77] checked:border-gray-300">
                            <i class="ri-check-line absolute inset-0 m-auto text-white opacity-0 pointer-events-none" aria-hidden="true"></i>
                        </div>
                        <label for="remember" class="ml-2 block text-xl text-gray-700">Remember me</label>
                    </div>
                    <div class="gradient-text">
                        <a href="{{ route('forgot-password') }}" class="text-xl hover:underline" style="text-decoration: none;">Forgot password?</a>
                    </div>
                </div>
                <button type="submit" class="w-full px-4 py-4 text-white text-2xl font-bold rounded-md bg-gradient-to-r from-[#184E77] to-[#52B69A] hover:opacity-90 focus:outline-none focus:ring focus:ring-[#52B69A]">Login</button>
            </form>
        </div>
    </div>

    <!-- Right Section -->
    <div class="relative w-1/2">
        <img src="./bg1.png" class="w-full h-full">
        <div class="w-full flex flex-col items-center justify-center space-y-8 bg-[#D9D9D966]">
            <div class="w-[350px] h-[300px] absolute bg-[#D9D9D966] top-[30%] left-[28%] rounded-3xl shadow-md">
                <div class="w-full flex flex-col justify-center items-center pt-24">
                    <div class="w-full flex flex-col justify-center items-center space-y-2">
                        <p class="text-white text-5xl font-bold">Digital Platform for</p>
                        <p class="text-black text-5xl font-bold">Human Resources</p>
                    </div>
                    <div class="w-full flex flex-col justify-center items-center space-y-4 pt-4">
                        <p class="text-3xl text-[#00000099]">Simplifying Human</p>
                        <p class="text-3xl text-[#00000099]">Resources Management</p>
                        <p class="text-3xl text-[#00000099]">for your Company</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>

    <style>
        .gradient-text {
            background: linear-gradient(to right, #184E77, #52B69A, #184E77);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            padding: 1rem;
            border-radius: 0.5rem;
        }
    </style>

@endsection