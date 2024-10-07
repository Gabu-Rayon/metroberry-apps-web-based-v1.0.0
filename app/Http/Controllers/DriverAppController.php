<?php

namespace App\Http\Controllers;

use App\Models\DriversLicenses;
use App\Models\PSVBadge;
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
            DB::rollBack();
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

    /**
     * Show Driver Dashboard
     * 
     * @return \Illuminate\View\View
     */

    public function dashboard()
    {
        return view('driver.dashboard');
    }

    /**
     * Store Driver Personal Documents
     * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */

    public function iddocs(Request $request)
    {
        try {
            $data = $request->all();

            $validator = Validator::make($data, [
                'national_id_front_avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
                'national_id_back_avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            ]);

            if ($validator->fails()) {
                Log::error('VALIDATION ERROR');
                Log::error($validator->errors()->all());

                return back()->with('error', $validator->errors()->first())->withInput();
            }

            // Store files in the storage/app/public/drivers directory
            $national_id_front_avatar = $request->file('national_id_front_avatar')->store('drivers', 'public');
            $national_id_back_avatar = $request->file('national_id_back_avatar')->store('drivers', 'public');

            $driver = auth()->user()->driver;

            $driver->national_id_front_avatar = $national_id_front_avatar;
            $driver->national_id_behind_avatar = $national_id_back_avatar;

            $driver->save();

            return redirect()->route('driver.dashboard')->with('success', 'Driver personal documents uploaded successfully.');
        } catch (Exception $e) {

            Log::error('UPLOAD DRIVER PERSONAL DOCUMENTS ERROR');
            Log::error($e);

            return back()->with('error', 'Something went wrong.')->withInput();
        }
    }

    /**
     * Store Driver License
     * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */

    public function license(Request $request)
    {
        try {
            $data = $request->all();

            $validator = Validator::make($data, [
                'driving_license_no' => 'required|string|max:255|unique:drivers_licenses',
                'issue_date' => 'required|date',
                'expiry_date' => 'required|date|after:issue_date',
                'national_id_front_avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
                'national_id_back_avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            ]);

            if ($validator->fails()) {
                Log::error('VALIDATION ERROR');
                Log::error($validator->errors()->all());

                return back()->with('error', $validator->errors()->first())->withInput();
            }

            DB::beginTransaction();

            // Store files in the storage/app/public/drivers directory

            $driving_license_avatar_front = $request->file('national_id_front_avatar')->store('drivers', 'public');
            $driving_license_avatar_back = $request->file('national_id_back_avatar')->store('drivers', 'public');

            // Update database records with the stored file paths

            DriversLicenses::create([
                'driver_id' => auth()->user()->driver->id,
                'driving_license_no' => $data['driving_license_no'],
                'driving_license_date_of_issue' => $data['issue_date'],
                'driving_license_date_of_expiry' => $data['expiry_date'],
                'driving_license_avatar_front' => $driving_license_avatar_front,
                'driving_license_avatar_back' => $driving_license_avatar_back,
            ]);

            DB::commit();

            return redirect()->route('driver.dashboard')->with('success', 'Driver license uploaded successfully.');
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('UPLOAD DRIVER LICENSE ERROR');
            Log::error($e);

            return back()->with('error', 'Something went wrong.')->withInput();
        }
    }

    /**
     * Update Driver License
     * 
     * @param \Illuminate\Http\Request $request
     * @param String $id
     * @return \Illuminate\Http\RedirectResponse
     */

    public function updateLicense(Request $request, $id)
    {
        try {
            $data = $request->all();

            $validator = Validator::make($data, [
                'driving_license_no' => 'required|string|max:255',
                'issue_date' => 'required|date',
                'expiry_date' => 'required|date|after:issue_date',
                'national_id_front_avatar' => 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
                'national_id_back_avatar' => 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            ]);

            if ($validator->fails()) {
                Log::error('VALIDATION ERROR');
                Log::error($validator->errors()->all());

                return back()->with('error', $validator->errors()->first())->withInput();
            }

            DB::beginTransaction();

            $license = DriversLicenses::find($id);

            if ($request->hasFile('national_id_front_avatar')) {
                $driving_license_avatar_front = $request->file('national_id_front_avatar')->store('drivers', 'public');
                $license->driving_license_avatar_front = $driving_license_avatar_front;
            }

            if ($request->hasFile('national_id_back_avatar')) {
                $driving_license_avatar_back = $request->file('national_id_back_avatar')->store('drivers', 'public');
                $license->driving_license_avatar_back = $driving_license_avatar_back;
            }

            $license->driving_license_no = $data['driving_license_no'];
            $license->driving_license_date_of_issue = $data['issue_date'];
            $license->driving_license_date_of_expiry = $data['expiry_date'];

            $license->save();

            DB::commit();

            return redirect()->route('driver.dashboard')->with('success', 'Driver license updated successfully.');
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('UPDATE DRIVER LICENSE ERROR');
            Log::error($e);

            return back()->with('error', 'Something went wrong.')->withInput();
        }
    }


    /**
     * Store Driver PSV Badge
     * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */

    public function psvbadge(Request $request)
    {
        try {

            $data = $request->all();

            $validator = Validator::make($data, [
                'psv_badge_no' => 'required|string|max:255|unique:psv_badges',
                'issue_date' => 'required|date',
                'expiry_date' => 'required|date|after:issue_date',
                'badge_copy' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            ]);

            if ($validator->fails()) {
                Log::error('VALIDATION ERROR');
                Log::error($validator->errors()->all());

                return back()->with('error', $validator->errors()->first())->withInput();
            }

            DB::beginTransaction();

            // Store files in the storage/app/public/drivers directory

            $psv_badge_avatar = $request->file('badge_copy')->store('drivers', 'public');

            // Update database records with the stored file paths
            PSVBadge::create([
                'driver_id' => auth()->user()->driver->id,
                'psv_badge_no' => $data['psv_badge_no'],
                'psv_badge_date_of_issue' => $data['issue_date'],
                'psv_badge_date_of_expiry' => $data['expiry_date'],
                'psv_badge_avatar' => $psv_badge_avatar,
            ]);

            DB::commit();

            return redirect()->route('driver.dashboard')->with('success', 'Driver PSV badge uploaded successfully.');
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('UPLOAD DRIVER PSV BADGE ERROR');
            Log::error($e);

            return back()->with('error', 'Something went wrong.')->withInput();
        }
    }

    /**
     * Update Driver PSV Badge
     * 
     * @param \Illuminate\Http\Request $request
     * @param String $id
     * 
     * @return \Illuminate\View\View
     */

    public function updatePsvBadge(Request $request, $id)
    {
        try {
            $data = $request->all();

            $validator = Validator::make($data, [
                'psv_badge_no' => 'required|string|max:255',
                'issue_date' => 'required|date',
                'expiry_date' => 'required|date|after:issue_date',
                'badge_copy' => 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            ]);

            if ($validator->fails()) {
                Log::error('VALIDATION ERROR');
                Log::error($validator->errors()->all());

                return back()->with('error', $validator->errors()->first())->withInput();
            }

            DB::beginTransaction();

            $psvBadge = PSVBadge::find($id);

            if ($request->hasFile('badge_copy')) {
                $psv_badge_avatar = $request->file('badge_copy')->store('drivers', 'public');
                $psvBadge->psv_badge_avatar = $psv_badge_avatar;
            }

            $psvBadge->psv_badge_no = $data['psv_badge_no'];
            $psvBadge->psv_badge_date_of_issue = $data['issue_date'];
            $psvBadge->psv_badge_date_of_expiry = $data['expiry_date'];

            $psvBadge->save();

            DB::commit();

            return redirect()->route('driver.dashboard')->with('success', 'Driver PSV badge updated successfully.');
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('UPDATE DRIVER PSV BADGE ERROR');
            Log::error($e);

            return back()->with('error', 'Something went wrong.')->withInput();
        }
    }

    /**
     * Driver Documents Page
     * 
     * @return \Illuminate\View\View
     */

    public function documents()
    {
        return view('driver.documents');
    }

    /**
     * Driver Vehicle Page
     * 
     * @return \Illuminate\View\View
     */

    public function vehicle()
    {
        return view('driver.vehicle');
    }
}
