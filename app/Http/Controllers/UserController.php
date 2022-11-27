<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function index()
    {
        return view('users.register', ['title' => 'Register',]);
    }

    // Create a new User

    public function store(Request $request)
    {

        $formFields = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6',
        ]);

        // Hash password

        $formFields['password'] = bcrypt($formFields['password']);


        $user = User::create($formFields);

        auth()->login($user);

        return redirect('/')
            ->with('message', 'Your account has been successfully created!');
    }

    // Logout user

    public function logout(Request $request) {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'You have been logged out!');
    }

    // Show login form

    public function login() {
        return view('users.login', ['title' => 'Login']);
    }

    public function authenticate(Request $request) {

        $formFields = $request->validate([
            "email" => ['required', 'email'],
            'password' => 'required|min:6',
        ]);
        if (auth()->attempt($formFields)) {
            $request->session()->regenerate();
            return redirect('/')->with('message', 'You have been logged in!');
        }
        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }
}
