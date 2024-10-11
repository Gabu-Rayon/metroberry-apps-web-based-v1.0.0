<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use App\Models\User;
use App\Rules\Phone;
use App\Models\Routes;
use App\Models\Customer;
use App\Models\Organisation;
use Illuminate\Http\Request;
use App\Models\RouteLocations;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class CustomerAppController extends Controller
{
    // Customer homepage
    public function customerIndexPage()
{
    // Get the authenticated user
    $user = Auth::user();

    // Check if the user is a customer
    if ($user->role !== 'customer') {
        return redirect()->back()->with('error', 'Access Denied. Only customers can access this page.');
    }

    // Fetch the customer data based on the user_id in the customers table
    $customer = Customer::where('user_id', $user->id)->firstOrFail();

    // Fetch the organization that the customer belongs to
    $organization = Organisation::find($customer->organisation_id);
    
    // Fetch booked trips for the customer (`trips` relationship in Customer model)
    $trips = Trip::where('customer_id', $customer->id)->get(); 

    // Fetch the routes for the organization (assuming you have a routes table)
    $routes = Routes::all();

    // Fetch the route locations (route_locations table with a route_id foreign key)
    $routeLocations = RouteLocations::whereIn('route_id', $routes->pluck('id'))->get();

    // Pass the data to the view
    return view('customer.index', [
        'user' => $user,
        'customer' => $customer,
        'organisation' => $organization,
        'routes' => $routes,
        'routeLocations' => $routeLocations,
        'trips' => $trips, // Pass the trips to the view
    ]);
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
        Log::info('Data from the Customer Registration : ', $request->all());

        // Trim password inputs
        $request->merge([
            'password' => trim($request->input('password')),
            'password_confirmation' => trim($request->input('password_confirmation')),
        ]);

        // Validation rules with password complexity check
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'phone' => ['required', 'string', 'unique:users,phone', 'max:15', new Phone()],
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
            'password.regex' => 'Password must contain at least one uppercase letter, one lowercase letter, one number, and one special character.',
        ]);

        // Redirect with errors if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {
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
            Log::info('User created: ', $user->toArray());

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
            Log::info('Customer created: ', $customer->toArray());

            // Redirect to phone input page with success message
            return redirect()->route('customer.sign.in.page')->with('success', 'Account created successfully. Please provide your phone number.');
        } catch (\Exception $e) {
            // Handle exceptions and show an error message
            return redirect()->back()->with('error', 'Failed to register customer. Please try again later.');
        }
    }

    // Sign-up continue page method
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

        // Simulate sending verification code (replace with actual SMS sending logic)
        $verificationCode = rand(1000, 9999);

        // Store the verification code in session
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

    // Customer login method
    public function customerLogin(Request $request)
    {
        // Validate request data
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        // Attempt to authenticate the user
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Authentication passed, redirect to homepage
            return redirect()->route('customer.index.page')->with('success', 'Welcome back!');
        }

        // Authentication failed
        return redirect()->back()
            ->with('error', 'Invalid credentials. Please try again.')
            ->withInput($request->only('email'));
    }

    // Sign-in page method
    public function signInPage()
    {
        return view('customer.sign-in');
    }

    public function customerLogout(Request $request)
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
        return redirect()->route('customer.sign.in.page')->with('success', 'You have been logged out successfully.');
    }



    //Get all the routes  waypoint for the selected route
    public function getAllRouteWaypoints(Request $request)
    {
        Log::info('HERE');
        try {
            $routeLocationWaypoints = RouteLocations::where('route_id', $request->route_id)
                ->get(['name', 'id', 'point_order']);
            Log::info('Data request for getting all waypoints for route ID: ' . $request->route_id);
            Log::info('Retrieved waypoints: ', $routeLocationWaypoints->toArray());

            return response()->json($routeLocationWaypoints);
        } catch (\Exception $e) {
            // Log any errors
            Log::error('Error fetching waypoints: ' . $e->getMessage());
            return response()->json(['error' => 'Failed to fetch waypoints'], 500);
        }
    }



    public function customerBookingPage()
    {
        // Get the authenticated user
        $user = Auth::user();

        // Check if the user is a customer
        if ($user->role !== 'customer') {
            return redirect()->back()->with('error', 'Access Denied. Only customers can access this page.');
        }

        // Fetch the customer data based on the user_id in the customers table
        $customer = Customer::where('user_id', $user->id)->firstOrFail();

        // Fetch the organization that the customer belongs to
        $organization = Organisation::find($customer->organisation_id);

        // Fetch the routes for the organization (assuming you have a routes table)
        $routes = Routes::all();

        // Fetch the route locations (assuming you have a route_locations table with a route_id foreign key)
        $routeLocations = RouteLocations::whereIn('route_id', $routes->pluck('id'))->get();

        // Pass the data to the view
        return view('customer.book-a-trip', [
            'user' => $user,
            'customer' => $customer,
            'organisation' => $organization,
            'routes' => $routes,
            'routeLocations' => $routeLocations,
        ]);
    }
    public function customerBookingTrip(Request $request)
    {
        try {
            // Get all data from the request
            $data = $request->all();

            // Log the incoming booking data for debugging
            Log::info('Customer booking trip data: ', $data);

            // Validate incoming data
            $validator = Validator::make($data, [
                'customer_id' => 'required|exists:customers,id',
                'pick_up_location' => 'required|string',
                'preferred_route_id' => 'required|exists:routes,id',
                'drop_off_location' => 'required|string',
                'pickup_time' => 'required|date_format:H:i',
                'trip_date' => 'required|date|after_or_equal:today',
            ]);

            // Handle validation failures
            if ($validator->fails()) {
                Log::info('Validation failed: ', $validator->errors()->toArray());
                return redirect()->back()->with('error', $validator->errors()->first())->withInput();
            }

            // Begin transaction to ensure atomic operations
            DB::beginTransaction();

            // Create the trip record in the database
            $trip = Trip::create([
                'customer_id' => $data['customer_id'],
                'route_id' => $data['preferred_route_id'],
                'pick_up_time' => $data['pickup_time'],
                'pick_up_location' => $data['pick_up_location'],
                'drop_off_location' => $data['drop_off_location'],
                'trip_date' => $data['trip_date'],
                'created_by' => $data['customer_id'],
            ]);

            // Commit the transaction if all went well
            DB::commit();

            // Log trip creation success
            Log::info('Trip created successfully: ', ['trip_id' => $trip->id]);

            // Redirect with a success message
            return redirect()->route('customer.profile')->with('success', 'Trip Booked successfully.');

        } catch (\Exception $e) {
            // Rollback transaction in case of any errors
            DB::rollBack();

            // Log the error for debugging
            Log::error('Error creating trip: ', ['error' => $e->getMessage()]);

            // Redirect with an error message
            return redirect()->back()->with('error', 'Something Went Wrong. Please try again later.')->withInput();
        }
    }


    public function customerProfile()
    {
        // Get the authenticated user
        $user = Auth::user();
        $organisations = Organisation::all();

        // Check if the user is a customer
        if ($user->role !== 'customer') {
            return redirect()->back()->with('error', 'Access Denied. Only customers can access this page.');
        }

        // Fetch the customer data based on the user_id in the customers table
        $customer = Customer::where('user_id', $user->id)->firstOrFail();

        return view('customer.profile', compact('customer', 'user', 'organisations'));
    }


    public function customerProfileUpdate(Request $request, $id)
    {
        // Validate the incoming request data
        $request->validate([
            'phone' => 'required|string|max:15',
            'full-name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'address' => 'nullable|string|max:255',
            'organisation' => 'required|exists:organisations,id',
            'national_id_no' => 'nullable|string|max:50',
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'national_id_front_avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'national_id_behind_avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Find the customer by ID
        $customer = Customer::findOrFail($id);
        $user = $customer->user;

        // Update customer details
        $customer->phone = $request->input('phone');
        $customer->name = $request->input('full-name');
        $customer->address = $request->input('address');
        $customer->organisation_id = $request->input('organisation');
        $customer->national_id_no = $request->input('national_id_no');

        // Handle profile picture upload
        if ($request->hasFile('profile_picture')) {
            $file = $request->file('profile_picture');
            $filename = time() . '_profile.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/profile_pictures'), $filename);
            $customer->profile_picture = 'uploads/profile_pictures/' . $filename;
        }

        // Handle national ID front avatar upload
        if ($request->hasFile('national_id_front_avatar')) {
            $file = $request->file('national_id_front_avatar');
            $filename = time() . '_national_id_front.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/national_id_avatars'), $filename);
            $customer->national_id_front_avatar = 'uploads/national_id_avatars/' . $filename;
        }

        // Handle national ID behind avatar upload
        if ($request->hasFile('national_id_behind_avatar')) {
            $file = $request->file('national_id_behind_avatar');
            $filename = time() . '_national_id_behind.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/national_id_avatars'), $filename);
            $customer->national_id_behind_avatar = 'uploads/national_id_avatars/' . $filename;
        }

        // Save the customer
        $customer->save();

        // Redirect back with a success message
        return redirect()->route('customer.profile', $id)->with('success', 'Profile updated successfully.');
    }

    public function customerTripHistory(){
        //customer trip history
    }



    public function updateProfilePicture(Request $request)
    {
        $request->validate([
            'profile_picture' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $user = Auth::user();
        $customer = $user->customer;

        if ($request->hasFile('profile_picture')) {
            $file = $request->file('profile_picture');
            $filePath = 'customers/profile_pictures/' . $user->id . '/' . $file->getClientOriginalName();

            // Store the file in the public disk
            Storage::disk('public')->put($filePath, file_get_contents($file));

            // Update the user's profile picture path
            $customer->user->avatar = $filePath;
            $customer->user->save();

            return response()->json(['newProfilePictureUrl' => Storage::disk('public')->url($filePath)]);
        }

        return response()->json(['error' => 'Failed to upload profile picture'], 400);
    }

}