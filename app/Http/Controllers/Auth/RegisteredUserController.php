<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class RegisteredUserController extends Controller

{
     public function create(){
        return view('register');
    }
    public function store(Request $request){
        $request->validate([
            'name'=>['required','string','max:255'],
            'email'=>['required','string','email','max:255','inique:users'],
            'password' =>['required','password::default()'],
        ]);
        $User = User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
        ]);
        Auth::login($user);
        return redirect('/ideas');
    }
}


