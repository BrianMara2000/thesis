<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Vonage\Voice\Endpoint\Phone;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Validated;

class UserController extends Controller
{
    public function login(){
        return view('users.login');
    }

    //Show register form
    public function register() {
        return view('users.register');
    }

    //Create new user
    public function store(Request $request) {
        $formFields = $request->validate([
            'school_id' => 'required|numeric|digits_between:9,9',
            'contact_number' => 'required|regex:/(^(09)\d{9}$)/',
            'parent_cnumber' => 'required|regex:/(^(09)\d{9}$)/',
            'department' => 'required|in:option1,option2,option3,option4',
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6'
            // 'password_confirmation' => ['required']
        ]);
 
        //Hash Password
        $formFields['password'] = bcrypt($formFields['password']);

        //Create user
        $user = User::create($formFields);

        //Login
        auth()->login($user);
        return redirect('/sensorData')->with('message', 'User created and Logged in Successfully');
    }

    //Logout user
    public function logout(Request $request) {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerate();


        return redirect('/')->with('message', 'You have been logout');
    }

    //Authenticate user
    public function authenticate(Request $request) {

        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if(auth()->attempt($formFields)) {
            $request->session()->regenerate();
            // Auth::user()->update(['is_safe' => true]);


            return redirect('/sensorData')->with('message', 'You are now logged in');
        }


        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email'); 
    }
}

