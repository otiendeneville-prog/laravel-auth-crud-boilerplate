<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class IdeaController extends Controller
{
    use AuthorizesRequests;
    public function index()
    {
        $ideas = Idea::with('user')->latest()->paginate(10);
        return view('ideas.index', compact('ideas'));
    }

    public function show(Idea $idea)
    {
        return view('ideas.show', compact('idea'));
    }

    public function create()
    {
        return view('ideas.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'idea' => 'required|string|min:5|max:1000',
        ]);

        auth()->user()->ideas()->create($validated);

        return redirect('/ideas')->with('success', 'Idea created successfully!');
    }

    public function edit(Idea $idea)
    {
        $this->authorize('update', $idea);
        return view('ideas.edit', compact('idea'));
    }

    public function update(Request $request, Idea $idea)
    {
        $this->authorize('update', $idea);

        $validated = $request->validate([
            'idea' => 'required|string|min:5|max:1000',
        ]);

        $idea->update($validated);

        return redirect('/ideas/' . $idea->id)->with('success', 'Idea updated successfully!');
    }

    public function destroy(Idea $idea)
    {
        $this->authorize('delete', $idea);
        $idea->delete();

        return redirect('/ideas')->with('success', 'Idea deleted successfully!');
    }
}
