@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-white mb-4">Ideas</h1>
        
        @auth
            <a href="/ideas/create" class="inline-block bg-indigo-500 hover:bg-indigo-600 text-white px-4 py-2 rounded-md">
                Create New Idea
            </a>
        @endauth
    </div>

    @if($ideas->count())
        <div class="space-y-4">
            @foreach($ideas as $idea)
                <div class="bg-gray-800 rounded-lg p-6 border border-gray-700">
                    <div class="flex justify-between items-start mb-3">
                        <div>
                           <h3 class="text-lg font-semibold text-white">{{ $idea->user?->name ?? 'Anonymous' }}</h3>
                            <p class="text-sm text-gray-400">{{ $idea->created_at->diffForHumans() }}</p>
                        </div>
                        @can('update', $idea)
                            <div class="flex gap-2">
                                <a href="/ideas/{{ $idea->id }}/edit" class="text-indigo-400 hover:text-indigo-300">Edit</a>
                                <form method="POST" action="/ideas/{{ $idea->id }}" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-400 hover:text-red-300" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </div>
                        @endcan
                    </div>
                    <p class="text-gray-200">{{ $idea->idea }}</p>
                </div>
            @endforeach
        </div>

        {{ $ideas->links() }}
    @else
        <p class="text-gray-400">No ideas yet. @auth<a href="/ideas/create" class="text-indigo-400 hover:text-indigo-300">Create one!</a>@endauth</p>
    @endif
</div>
@endsection
