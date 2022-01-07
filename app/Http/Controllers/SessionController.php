<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {
        $attributes =   request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (auth()->attempt($attributes)) {
            session()->regenerate();
            // session fixation
            
            return redirect('/')->with('success', 'Welcome Back!');
        }

        // return back()->withInput()->withErrors(['email' => "Your provided credentials couldn't be verified."]);
        throw ValidationException::withMessages(['email' => "Your provided credentials couldn't be verified."]);
    }

    public function destroy()
    {
        auth()->logout();
        return redirect('/')->with('success', "Good Bye!");
    }
}
