<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class DriverAppController extends Controller
{

    /**
     * Show Driver Signup Form
     * 
     * @return \Illuminate\View\View
     */

    public function signup()
    {
        $organisations = DB::table('organisations')->get();
        return view('driver.signup', compact('organisations'));
    }

    /**
     * Store Driver Signup Form
     * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */

    public function signupstore(Request $request)
    {
        try {
            $data = $request->all();

            $validator = Validator::make($data, [
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:8',
                'national_id_no' => 'required|string|max:255|unique:drivers|unique:customers',
                'organisation_id' => 'required|integer',
            ]);

            if ($validator->fails()) {
                Log::error('VALIDATION ERROR');
                Log::error($validator->errors()->all());

                return back()->with('error', $validator->errors()->first())->withInput();
            }

            DB::beginTransaction();

            $user = DB::table('users')->insertGetId([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => bcrypt($data['password']),
                'role' => 'driver',
            ]);

            DB::table('drivers')->insert([
                'created_by' => $user,
                'organisation_id' => $data['organisation_id'],
                'user_id' => $user,
                'national_id_no' => $data['national_id_no'],
            ]);

            DB::commit();

            return redirect()->route('driver.login')->with('success', 'Driver signed up successfully.')->withInput();
        } catch (Exception $e) {
            Log::error('SIGN UP DRIVER ERROR');
            Log::error($e);

            return back()->with('error', 'Something went wrong.')->withInput();
        }
    }

    /**
     * Show Driver Login Form
     * 
     * @return \Illuminate\View\View
     */

    public function login()
    {
        return view('driver.login');
    }

    /**
     * Store Driver Login Form
     * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */

    public function loginstore(Request $request)
    {
        try {
            $data = $request->all();

            $validator = Validator::make($data, [
                'email' => 'required|string|email|max:255',
                'password' => 'required|string|min:8',
            ]);

            if ($validator->fails()) {
                Log::error('VALIDATION ERROR');
                Log::error($validator->errors()->all());

                return back()->with('error', $validator->errors()->first())->withInput();
            }

            if (!auth()->attempt(['email' => $data['email'], 'password' => $data['password'], 'role' => 'driver'])) {
                return back()->with('error', 'Invalid credentials.')->withInput();
            }

            return redirect()->route('driver.dashboard')->with('success', 'Driver logged in successfully.');
        } catch (Exception $e) {
            Log::error('LOGIN DRIVER ERROR');
            Log::error($e);

            return back()->with('error', 'Something went wrong.')->withInput();
        }
    }
}
