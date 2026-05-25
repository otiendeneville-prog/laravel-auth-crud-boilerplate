<?php

namespace App\Http\Controllers;

use App\Http\Requests\storeIdeaRequest;
use App\Models\Idea;
use Illuminate\Http\Request;

class IdeaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ideas = Idea::query()->where([
            'user_id'=> Auth::id()
        ])->get();

        return view('ideas', [
            'ideas' => $ideas,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
  
     */
    public function store(storeIdeaRequest $request)

    {

        request()->validate([
            'ideas' => 'required'
        ]);
        //to prevent sql not null error;
        Idea::create([
            'description' => request('ideas'),
            'state' => 'pending'
        ]);
        return redirect('ideas');
    }

    /**
     * Display the specified resource.
     */
    public function show(Idea $idea)
    {
        return view('ideas', [
            'idea' => $idea,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Idea $idea)
    {
        $idea->edit([
            $idea => request('idea'),
        ]);
        return view('ideas.edit', compact('idea'));
        //    return view('ideas.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Idea $idea)
    {
        $idea->update([
            $idea => request('idea'),
        ]);
        return redirect("/ideas/{$idea->id}");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Idea $idea)
    {
        $idea->delete();
        return redirect('/ideas');
    }

    public function message()
    {
        return [
            'description.required' => 'description is required',
        ];
    }
}
