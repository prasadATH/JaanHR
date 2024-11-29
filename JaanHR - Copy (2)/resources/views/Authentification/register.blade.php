@extends('layouts.app')

@section('title', 'Login')

@section('content')
<link rel="stylesheet" href="http://127.0.0.1:5173/resources/css/app.css">
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <section class="w-full h-screen flex">
        <!-- Left Section -->
        <div class="w-1/2 h-full bg-white flex flex-col justify-center items-center">
            <div class="w-full flex flex-col justify-center items-center space-y-4">
                <p class="text-6xl text-black font-bold">Hey, Hello!</p>
                <p class="text-2xl text-[#00000099]">Enter the information you entered while registering</p>
            </div>
            <div class="w-1/2">
                <!-- Laravel Form -->
                <form method="POST" action="{{ route('register') }}" class="mt-6">
                    @csrf
                    @if($errors->any())
                        <div class="bg-red-100 text-red-800 p-3 rounded mb-4">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="mb-4">
                        <label for="name" class="block text-xl font-bold text-black">Full Name</label>
                        <input type="text" name="name" id="name" class="w-full px-4 py-4 mt-1 border-2 border-[#1C1B1F80] rounded-md focus:outline-none focus:ring focus:ring-indigo-300" required>
                    </div>
                    <div class="mb-6">
                        <label for="email" class="block text-xl font-bold text-black">Email</label>
                        <input type="email" name="email" id="email" class="w-full px-4 py-4 mt-1 border-2 border-[#1C1B1F80] rounded-md focus:outline-none focus:ring focus:ring-indigo-300" required>
                    </div>
                    <div class="mb-6">
                        <label for="password" class="block text-xl font-bold text-black">Password</label>
                        <input type="password" name="password" id="password" class="w-full px-4 py-4 mt-1 border-2 border-[#1C1B1F80] rounded-md focus:outline-none focus:ring focus:ring-indigo-300" required>
                    </div>
                    <div class="mb-6">
                        <label for="password_confirmation" class="block text-xl font-bold text-black">Confirm Password</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" class="w-full px-4 py-4 mt-1 border-2 border-[#1C1B1F80] rounded-md focus:outline-none focus:ring focus:ring-indigo-300" required>
                    </div>
                    <div class="flex items-center justify-between mb-6">
                        <div class="flex items-center">
                            <input type="checkbox" id="terms" name="terms" class="h-8 w-8 appearance-none border border-[#1C1B1F] rounded focus:ring-indigo-500 checked:bg-gradient-to-r checked:from-[#184E77] checked:via-[#52B69A] checked:to-[#184E77]">
                            <label for="terms" class="ml-2 block text-gray-700">By creating an account, you accept <span class="bg-gradient-to-r from-[#184E77] via-[#52B69A] to-[#184E77] bg-clip-text text-transparent font-bold cursor-pointer">terms & conditions</span></label>
                        </div>
                    </div>
                    <button type="submit" class="w-full px-4 py-4 text-white text-2xl font-bold rounded-md bg-gradient-to-r from-[#184E77] to-[#52B69A] hover:opacity-90 focus:outline-none focus:ring focus:ring-[#52B69A]">Register</button>
                </form>
            </div>
        </div>

        <!-- Right Section -->
        <div class="relative">
            <img src="./bg1.png" class="w-[800px] h-full">
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
    </section>
</body>
</html>
