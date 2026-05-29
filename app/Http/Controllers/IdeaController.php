<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class IdeaController extends Controller
{
    /**
     * Display a listing of the ideas.
     */
    public function index()
    {

        $ideas = Idea::latest()->get();
        return view('ideas.index', compact('ideas'));
    }

    /**
     * Store a newly created idea in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'content' => 'required|string|min:3', // Adjust this field name if your table column is different
        ]);

        Idea::create($validated);

        return redirect('/ideas')->with('success', 'Idea created successfully!');
    }

    /**
     * Display the specified idea.
     */
    public function show(Idea $idea)
    {
        return view('ideas.show', compact('idea'));
    }

    /**
     * Show the form for editing the specified idea.
     */
    public function edit(Idea $idea)
    {
        return view('ideas.edit', compact('idea'));
    }

    /**
     * Update the specified idea in storage.
     */
    public function update(Request $request, Idea $idea)
    {
        $validated = $request->validate([
            'content' => 'required|string|min:3',
        ]);

        $idea->update($validated);

        return redirect('/ideas/' . $idea->id)->with('success', 'Idea updated successfully!');
    }

    /**
     * Remove the specified idea from storage.
     */
    public function destroy(Idea $idea)
    {
        $idea->delete();

        return redirect('/ideas')->with('success', 'Idea deleted successfully!');
    }
}
