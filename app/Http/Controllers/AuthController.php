<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function register()
    {
        return view('auth/register');
    }

    public function registerSave(Request $request)
    {
        Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ])->validate();

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'level' => 'Admin',
            'mobile' => $request->mobile,
            'address' => $request->address,
        ]);

        return redirect()->route('login');
    }

    public function profileUpdate(Request $request)
    {
        $user = Auth::user();

        Validator::make($request->all(), [
            'mobile' => 'nullable|string',
            'address' => 'nullable|string',
        ])->validate();

        $user->update([
            'mobile' => $request->mobile, // Update nomor telepon
            'address' => $request->address, // Update alamat
        ]);

        return redirect()->route('profile')->with('success', 'Profile updated successfully');
    }

    public function login()
    {
        return view('auth/login');
        
    }

    public function loginAction(Request $request)
    {
        Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ])->validate();

        if(!Auth::attempt($request->only('email', 'password'), $request->boolean('remember'))){
            throw ValidationException::withMessages([
                'email' => trans('auth.failed')
            ]);
        }

        $request->session()->regenerate();

        return redirect()->route('dashboard');
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        return redirect('/');
    }

    public function profile()
    {
        return view('profile');
    }
}