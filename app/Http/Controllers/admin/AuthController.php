<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Show the admin login form.
     */
    public function showLogin()
    {
        if (Auth::check() && Auth::user()->role === 'superadmin') {
            return redirect()->route('dashboard');
        }

        return view('admin.login');
    }

    /**
     * Handle an admin login attempt.
     */
    public function login(Request $request)
{
    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    if (!Auth::guard('admin')->attempt(
        $credentials,
        $request->boolean('remember')
    )) {
        return back()
            ->withErrors([
                'email' => 'These credentials do not match our records.',
            ])
            ->onlyInput('email');
    }

    // Get the authenticated admin
    $admin = Auth::guard('admin')->user();

    // Check admin role
    if ($admin->role !== 'superadmin') {

        Auth::guard('admin')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return back()
            ->withErrors([
                'email' => 'You are not authorized to access the admin panel.',
            ])
            ->onlyInput('email');
    }

    // Regenerate session after successful login
    $request->session()->regenerate();

    return redirect()->intended(route('admin.dashboard'));
}

    /**
     * Log the admin out.
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }
}