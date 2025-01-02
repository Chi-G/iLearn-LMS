<?php

namespace App\Http\Controllers\Instructor\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\InstructorLoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class InstructorLoginController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('instructor.auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(InstructorLoginRequest $request): RedirectResponse
    {
        // Validate login credentials
        $credentials = $request->only('email', 'password');

        // Attempt to authenticate the user using the 'admin' guard
        if (Auth::guard('instructor')->attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('instructor.dashboard');
        }

        // If the login attempt fails, redirect back to the login form with an error
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('instructor')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
