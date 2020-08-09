<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;

class RegistrationController extends Controller
{
    public function create() 
    {
        return view('registration.create');
    }

    public function store() 
    {
        
        //Validate the form
        $this->validate(request(), [
            'name'=> 'required',
            'email'=> 'required|email',
            'password'=> 'required|confirmed'
        ]);

        //Create and save the user

        $user = User::create([
            'name' => request('name'), 
            'email' => request('email'), 
            'password' => bcrypt(request('password'))
            ]);
        
       
        //Sign them in
        Auth::login($user);

        //Redirect to the home the page
        return redirect()->home();
    }

    public function destroy() 
    {
        //
    }
}
