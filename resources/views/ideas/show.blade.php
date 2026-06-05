@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="max-w-2xl mx-auto">
        <div class="bg-gray-800 rounded-lg p-6 border border-gray-700 mb-6">
            <div class="flex justify-between items-start mb-4">
                <div>
                    <h1 class="text-3xl font-bold text-white">{{ $idea->user->name }}'s Idea</h1>
                    <p class="text-sm text-gray-400 mt-2">{{ $idea->created_at->format('F j, Y') }}</p>
                </div>
                @can('update', $idea)
                    <div class="flex gap-2">
                        <a href="/ideas/{{ $idea->id }}/edit" class="bg-indigo-500 hover:bg-indigo-600 text-white px-4 py-2 rounded-md">
                            Edit
                        </a>
                        <form method="POST" action="/ideas/{{ $idea->id }}" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-md" onclick="return confirm('Are you sure?')">
                                Delete
                            </button>
                        </form>
                    </div>
                @endcan
            </div>
            <p class="text-gray-200 text-lg">{{ $idea->idea }}</p>
        </div>

        <a href="/ideas" class="text-indigo-400 hover:text-indigo-300">
            ← Back to Ideas
        </a>
    </div>
</div>
@endsection
