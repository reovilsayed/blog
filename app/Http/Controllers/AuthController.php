<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $data)
    {
       $data->validate([
           'name' =>['required','min:4'],
           'email' =>['required','email'],
           'password' =>['required','min:8','confirmed'],
       ]);
       User::create([
           'name'=>$data->name,
           'email'=>$data->email,
           'password'=>bcrypt($data->password)
       ]);
       return back()->with('message','you have successfuly created your account');
    }
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('add-post');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('login');
    }
}
