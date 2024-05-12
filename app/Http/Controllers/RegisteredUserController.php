<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisteredUserController extends Controller
{
    public function create()
    {
        return view('auth.register'); 
    }

    public function store()
    {
                //validate
                $validatedAttributes = request()->validate([
                    'first_name' => ['required'],
                    'last_name'  => ['required'],
                    'email'      => ['required', 'email'],
                    'password'   => ['required', Password::min(6)],
                ]);
                //create user in db
                $user = User::create($validatedAttributes);
        
                Auth::login($user);
        
                return redirect('/jobs');
    }
}
