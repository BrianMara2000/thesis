<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    //Show all users
    public function index() {
        return view('admin.dashboard.index-dashboard', [
            'users' => User::all()
        ]); 
    }

    //Show User's create form
    public function create() {
        return view('users.register');
    }

    //Add new user
    public function add(Request $request) {
        $formFields = $request->validate([
            'school_id' => 'required|numeric|digits_between:9,9',
            'contact_number' => 'required|regex:/(^(09)\d{9}$)/',
            'parent_cnumber' => 'required|regex:/(^(09)\d{9}$)/',
            'department' => 'required|in:CET,TC,CHMTN,SHS',
            'last_name' => ['required', 'min:3'],
            'first_name' => ['required', 'min:3'],
            'middle_initial' => 'nullable|string|max:1',
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6'
            // 'password_confirmation' => ['required']
        ]);
 
        //Hash Password
        $formFields['password'] = bcrypt($formFields['password']);

        //Create user
        $user = User::create($formFields);

        //Login
        // auth()->login($user);
        return redirect('/dashboard/users/listings')->with('message', 'User created and Logged in Successfully');
    }

    //Show Edit user form
    public function edit(User $user) {
        // dd($user->last_name);
        return view('modal.edit-modal', ['user' => $user]);
    }

    //Update User
    public function update(Request $request, User $user) {
        $formFields = $request->validate([
            'school_id' => 'required|numeric|digits_between:9,9',
            'contact_number' => 'required|regex:/(^(09)\d{9}$)/',
            'parent_cnumber' => 'required|regex:/(^(09)\d{9}$)/',
            'department' => 'required|in:CET,TC,CHMTN,SHS',
            'last_name' => ['required', 'min:3'],
            'first_name' => ['required', 'min:3'],
            'middle_initial' => 'nullable|string|max:1',
            'email' => ['required', 'email'],
            'password' => 'required|confirmed|min:6'
            // 'password_confirmation' => ['required']
        ]);
 
        //Hash Password
        $formFields['password'] = bcrypt($formFields['password']);

        //Update user
        $user->update($formFields);

        //Login
        // auth()->login($user);
        return redirect('/dashboard/users/listings')->with('message', 'User updated Successfully');
    }

    //Delete User
    public function destroy(User $user) {
        $user->delete();

        return redirect('/dashboard/users/listings')->with('message', 'User deleted Successfully');
    }
}
