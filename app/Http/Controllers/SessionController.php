<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['except'=> 'destroy']);
    }

    public function create()
    {
        return view('sessions.login');
    }

    public function store(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->home();
        }

        return back()->withErrors([
            'Please check your credentials and try again.'
        ]);
    }

    public function destroy()
    {
        Auth::logout();

        return redirect()->home();
    }
}
