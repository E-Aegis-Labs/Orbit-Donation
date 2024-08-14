<?php

namespace App\Http\Controllers\Shield;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Storage;

class ShieldController extends Controller
{
    public function index()
    {
        // Retrieve the shield route prefix from the configuration
        $shieldRoutePrefix = config('app.shield_route_prefix');
        $user = Auth::user();

        // Return the view for the dashboard with the user data
        return view('Shield.dashboard', [
            'shieldRoutePrefix' => $shieldRoutePrefix,
            'user' => $user,
        ]);
    }

    public function show()
    {
        // Retrieve the shield route prefix from the configuration
        $shieldRoutePrefix = config('app.shield_route_prefix');
        $user = Auth::user();

        // Return the view for the profile with the user data
        return view('Shield.utils.profile', [
            'shieldRoutePrefix' => $shieldRoutePrefix,
            'user' => $user,
        ]);
    }

    public function updateProfile(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $request->user()->id,
            'profile_picture' => 'nullable|image|mimes:jpg,jpeg,png|max:2048', // Validate the profile picture
        ]);

        $user = $request->user();
        $user->name = $request->name;
        $user->email = $request->email;

        if ($request->hasFile('profile_picture')) {
            // Delete the old profile picture if it exists
            if ($user->profile_picture) {
                Storage::delete($user->profile_picture);
            }

            // Store the new profile picture
            $path = $request->file('profile_picture')->store('profile_pictures');
            $user->profile_picture = $path;
        }

        $user->save();

        return redirect()->route('Shield.profile')->with('status', 'Profile updated successfully!');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => ['required', 'current_password'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = $request->user();
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('Shield.profile')->with('status', 'Password updated successfully!');
    }
}
