@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center min-h-screen">
    <div class="w-full max-w-md">
        <div class="bg-gray-800 rounded-lg p-8 border border-gray-700">
            <h1 class="text-3xl font-bold text-white mb-8 text-center">Register</h1>

            <form method="POST" action="/register">
                @csrf

                <div class="mb-6">
                    <label for="name" class="block text-sm font-medium text-white mb-2">Name</label>
                    <input 
                        type="text" 
                        id="name" 
                        name="name" 
                        value="{{ old('name') }}"
                        class="w-full bg-gray-700 border border-gray-600 rounded-md text-white px-4 py-2 focus:outline-none focus:border-indigo-500 @error('name') border-red-500 @enderror"
                        required
                    >
                    @error('name')
                        <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="email" class="block text-sm font-medium text-white mb-2">Email</label>
                    <input 
                        type="email" 
                        id="email" 
                        name="email" 
                        value="{{ old('email') }}"
                        class="w-full bg-gray-700 border border-gray-600 rounded-md text-white px-4 py-2 focus:outline-none focus:border-indigo-500 @error('email') border-red-500 @enderror"
                        required
                    >
                    @error('email')
                        <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="password" class="block text-sm font-medium text-white mb-2">Password</label>
                    <input 
                        type="password" 
                        id="password" 
                        name="password" 
                        class="w-full bg-gray-700 border border-gray-600 rounded-md text-white px-4 py-2 focus:outline-none focus:border-indigo-500 @error('password') border-red-500 @enderror"
                        required
                    >
                    @error('password')
                        <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="password_confirmation" class="block text-sm font-medium text-white mb-2">Confirm Password</label>
                    <input 
                        type="password" 
                        id="password_confirmation" 
                        name="password_confirmation" 
                        class="w-full bg-gray-700 border border-gray-600 rounded-md text-white px-4 py-2 focus:outline-none focus:border-indigo-500"
                        required
                    >
                </div>

                <button type="submit" class="w-full bg-indigo-500 hover:bg-indigo-600 text-white font-medium py-2 rounded-md">
                    Register
                </button>

                <p class="text-center text-gray-400 mt-4">
                    Already have an account? 
                    <a href="/login" class="text-indigo-400 hover:text-indigo-300">Login</a>
                </p>
            </form>
        </div>
    </div>
</div>
@endsection
