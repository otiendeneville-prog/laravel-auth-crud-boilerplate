<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Idea;
class IdeaController extends Controller
{
    public function index(){
        $ideas = idea::latest()->get;

        return view('ideas');
    }
}
