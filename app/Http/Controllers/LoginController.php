<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{
     public function showLoginForm(){
         
        return view('backend.login-form'); 
    }

    // Handle login action
    public function login(Request $request){
        
        // Validate input
        $credentials = $request->validate([
            'name' => 'required|string',
            'password' => 'required|string',
        ]);

        // Find user by name
        $user = User::where('name', $credentials['name'])->first();

        if ($user && Hash::check($credentials['password'], $user->password)) {
            // Login the user
            Auth::login($user);
            

            // Redirect after login
            return redirect()->intended('dashboard')->with('success', 'Login successful!');
        }

        // If credentials invalid
        return back()->withErrors(['error' => 'Invalid username or password.']);
    }
    // Logout
    public function logout(Request $request){
        
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login')->with('success', 'Logged out successfully!');
    }
}
