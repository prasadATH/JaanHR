<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Password;

class AuthController extends Controller
{
    /**
     * Show the login page (GET method).
     */
    public function showLogin()
    {
        if (Auth::check()) {
            $employees = Employee::all();
            $section = "employee";
            $data = [
                (object)['id' => 1, 'name' => 'John Doe', 'email' => 'john@example.com'],
                (object)['id' => 2, 'name' => 'Jane Smith', 'email' => 'jane@example.com'],
            ];

            return view('management.employee-management', compact('section', 'data'));
        }

        return view('authentification.login');
    }

    /**
     * Show the registration page (GET method).
     */
    public function showRegister()
    {
        if (Auth::check()) {
            return view('pages.dashboard');
        }
        return view('authentification.register');
    }

    /**
     * Handle user registration (POST method).
     */
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $token = $user->createToken('auth_token')->plainTextToken;

        // Maintain the session
        Auth::login($user);

        return redirect('/dashboard')->with('success', 'Registration successful! You are now logged in.');
    }

    /**
     * Handle user login (POST method).
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        if (!Auth::attempt($request->only('email', 'password'))) {
            return back()->withErrors(['email' => 'Invalid credentials.']);
        }
    
        $user = Auth::user();
        $token = $user->createToken('auth_token')->plainTextToken;
    
        // Maintain the session
        Auth::login($user);
    
        // Redirect to the employee management route
        return redirect()->route('employee.management')->with('success', 'Login successful!');
    }
    
    /**
     * Handle user logout (POST method).
     */
    public function logout(Request $request)
    {
       // $request->user()->currentAccessToken()->delete();

        // Destroy the session
        Auth::logout();

        return redirect('/login')->with('success', 'Logged out successfully.');
    }

    public function showForgotPassword()
    {
        return view('authentification.forgotpassword');
    }
    
    public function handleForgotPassword(Request $request)
    {
        // Validate the email
        $request->validate(['email' => 'required|email|exists:users,email']);
        
        // Attempt to send the password reset link
        $status = Password::sendResetLink(
            $request->only('email')
        );
        
        // Check the status and respond accordingly
        if ($status === Password::RESET_LINK_SENT) {
            // Render the password link confirmation view
            return view('authentification.passwordlinkconfirmation', [
                'email' => $request->email, // Pass the email to the view
            ]);
        }
        
        // If there was an issue, return an error
        return redirect()->back()->withErrors(['email' => __($status)]);
    }
    
    
    public function showResetLinkConfirmation($email)
{
    return view('authentification.passwordlinkconfirmation', ['email' => $email]);
}
    public function showResetForm($token)
{
    return view('authentification.passwordreset', ['token' => $token]);
}

public function updateNewPassword(Request $request)
{
    $request->validate([
        'email' => 'required|email|exists:users,email',
        'password' => [
            'required',
            'min:8',
            'confirmed',
            'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/', // At least one uppercase, one lowercase, and one number
        ],
    ]);

    $user = User::where('email', $request->email)->first();

    if ($user) {
        try {
            $user->forceFill([
                'password' => Hash::make($request->password),
            ])->save();

            return view('authentification.passwordresetsuccess')->with('status', __('Your password has been reset successfully.'));
        } catch (\Exception $e) {
            return back()->withErrors(['email' => __('An error occurred while updating the password. Please try again.')]);
        }
    }

    return back()->withErrors(['email' => __('User not found. Please check the email address.')]);
}




public function showResetSuccess()
{
    return view('authentification.passwordlinkconfirmation');
}

}
