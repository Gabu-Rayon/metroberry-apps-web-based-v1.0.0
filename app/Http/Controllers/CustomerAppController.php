<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Customer;
use App\Models\Organisation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class CustomerAppController extends Controller
{


    //Customer homepage
    public function customerIndexPage(){
         return view('customer.index');
    }
    // Welcome page method
    public function WelcomePage()
    {
        return view('customer.welcome');
    }

    // Sign-up options method
    public function signUpOptions()
    {
        return view('customer.sign-up-options');
    }

    // Register page method
    public function registerPage()
    {
        // Retrieve organisations from the database
        $organisations = Organisation::all();
        return view('customer.register', compact('organisations'));
    }

    // Handle registration form submission

    public function registerCustomer(Request $request)
    {

        Log::info('Data from the Customer Registration : ');

        Log::info($request);


        // Trim password inputs
        $request->merge([
            'password' => trim($request->input('password')),
            'password_confirmation' => trim($request->input('password_confirmation')),
        ]);

        // Validation rules with password complexity check
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => [
                'required',
                'string',
                'min:8',
                'confirmed',
                'regex:/[a-z]/',
                'regex:/[A-Z]/',
                'regex:/[0-9]/',
                'regex:/[@$!%*#?&]/'
            ],
            'organisation' => 'required|exists:organisations,id',
        ], [
            'password.regex' => 'Password must contain at least one uppercase, one lowercase, one number, and one special character.',
        ]);

        // Redirect with errors if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {
            // Get authenticated user as the creator
            // $creator = Auth::user();

            // Handle avatar upload if provided
            $avatarPath = null;
            if ($request->hasFile('avatar')) {
                $avatarPath = $request->file('avatar')->store('avatars', 'public');
            }

            // Create the user
            $user = User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => bcrypt($request->input('password')),
                'phone' => $request->input('phone'),
                'address' => $request->input('address'),
                'avatar' => $avatarPath,
                'created_by' => null,
                'role' => 'customer',
            ]);
            Log::info('user created is : ');
            Log::info($user);

            // Retrieve the organisation code
            $organisation = Organisation::find($request->input('organisation'));
            $organisation_code = $organisation->organisation_code;

            // Create the customer
            $customer = Customer::create([
                'created_by' => $user->id,
                'user_id' => $user->id,
                'organisation_id' => $organisation->id,
                'customer_organisation_code' => $organisation_code,
                'national_id_no' => null,
                'national_id_front_avatar' => null,
                'national_id_behind_avatar' => null,
            ]);
            Log::info('Customer Created is : ');
            Log::info($customer);

            // Redirect to phone input page with success message
            return redirect()->route('sign.up.continue.page')->with('success', 'Account created successfully. Please provide your phone number.');

        } catch (\Exception $e) {
            // Handle exceptions and show an error message
            return redirect()->back()->with('error', 'Failed to register customer. Please try again later.');
        }
    }


    public function signUpContinuePage()
    {
        return view('customer.sign-up-continue-to-verify');
    }
    // Send verification code method
    public function sendVerificationCode(Request $request)
    {
        // Validate phone number
        $request->validate([
            'phone' => 'required|string|max:15',
        ]);
        $request->validate([
            'email' => 'required|email|unique:users,email',
        ]);

        // Simulate sending verification code using the  an SMS API or Imap to send the actual code)
        $verificationCode = rand(1000, 9999);

        // Store the verification code in session or database ,implement better storage if needed
        session(['verification_code' => $verificationCode]);

        // Redirect to the verification code input page
        return redirect()->route('verify.code.page')->with('phone', $request->phone);
    }

    // Verify code page
    public function verifyCodePage()
    {
        return view('customer.verify-account');
    }

    
    // Handle verification code submission
    public function verifyCode(Request $request)
    {
        // Validate verification code
        $request->validate([
            'verification-code' => 'required|numeric',
        ]);

        // Compare the submitted code with the stored one
        if ($request->input('verification-code') == session('verification_code')) {
            // Code is correct, mark the user as verified (or proceed to log in)
            session()->forget('verification_code');
            return redirect()->route('customer.index.page')->with('success', 'Phone number verified successfully.');
        }

        // If the code is incorrect
        return redirect()->back()->withErrors(['verification-code' => 'Invalid code'])->withInput();
    }


     public function customerLogin(Request $request){
        //customer auth code 
     }


      public function   signInPage(){
        return view('customer.sign-in');
      }
}