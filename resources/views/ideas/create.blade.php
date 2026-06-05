@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="max-w-2xl mx-auto">
        <h1 class="text-3xl font-bold text-white mb-8">Create New Idea</h1>

        <form method="POST" action="/ideas" class="bg-gray-800 rounded-lg p-6 border border-gray-700">
            @csrf
            
            <div class="mb-6">
                <label for="idea" class="block text-sm font-medium text-white mb-2">Your Idea</label>
                <textarea 
                    id="idea" 
                    name="idea" 
                    rows="6" 
                    class="w-full bg-gray-700 border border-gray-600 rounded-md text-white px-4 py-2 focus:outline-none focus:border-indigo-500 @error('idea') border-red-500 @enderror"
                    required
                >{{ old('idea') }}</textarea>
                @error('idea')
                    <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex gap-4">
                <button type="submit" class="bg-indigo-500 hover:bg-indigo-600 text-white px-6 py-2 rounded-md">
                    Save Idea
                </button>
                <a href="/ideas" class="bg-gray-700 hover:bg-gray-600 text-white px-6 py-2 rounded-md">
                    Cancel
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
