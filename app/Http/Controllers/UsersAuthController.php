<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Support\Facades\Validator;

class UsersAuthController extends Controller
{
    /**
     * Show Driver Login Form
     * 
     * @return \Illuminate\View\View
     */


     


    // Welcome page method
    public function WelcomePage()
    {
        return view('welcome');
    }

    // Sign-up options method
    public function signUpOptions()
    {
        return view('sign-in-options');
    }

    public function usersSignInPage()
    {
        return view('sign-in');
    }

    /**
     * Store Driver Login Form
     * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */

    public function loginStore(LoginRequest $request): RedirectResponse
    {
        try {
            $request->authenticate();

            $user = $request->user();

            // Check if user account is inactive and handle accordingly
            if (
                $user->role == 'fuelling_station' && $user->fuelling_station->status == 'inactive' ||
                $user->role == 'organisation' && $user->organisation->status == 'inactive'
            ) {

                Auth::guard('web')->logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();

                return back()->with('error', 'Your Account is inactive. Please contact the Administrator.');
            }

            // Regenerate session
            $request->session()->regenerate();

            // Redirect users based on their roles
            switch ($user->role) {
                case 'fuelling_station':
                    return redirect()->route('fuelling-station.dashboard');
                case 'organisation':
                    return redirect()->route('organisation.dashboard');
                case 'customer':
                    return redirect()->route('customer.index.page');
                case 'driver':
                    return redirect()->route('driver.dashboard');
                default:
                    return redirect()->route('dashboard');
            }
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }




    // Sign-in page method
    public function signInPage()
    {
        return view('customer.sign-in');
    }

    public function usersSignOut(Request $request)
    {
        // Log the logout attempt
        Log::info('Customer logout attempt: ', ['user_id' => Auth::id()]);

        // Log out the user
        Auth::guard('web')->logout();

        // Invalidate the session
        $request->session()->invalidate();

        // Regenerate the CSRF token
        $request->session()->regenerateToken();

        // Redirect to the login page with a success message
        return redirect()->route('welcome.page')->with('success', 'You have been logged out successfully.');
    }

}