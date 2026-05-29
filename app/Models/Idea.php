<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Idea extends Model
{
     public function index()
    {
        // 1. Capitalize 'Idea' and add () to get()
        $ideas = Idea::latest()->get();

        // 2. Change 'ideas' to 'ideas.index' to match your folder structure
        return view('ideas.index', compact('ideas'));
    }
}
