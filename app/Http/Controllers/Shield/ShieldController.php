<?php

namespace App\Http\Controllers\Shield;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class ShieldController extends Controller
{
    public function index()
    {
        // Retrieve the shield route prefix from the configuration
        $shieldRoutePrefix = config('app.shield_route_prefix');

        // You can add any necessary logic here
        // For example, retrieving data for the dashboard

        // Return the view for the dashboard
        return view('Shield.dashboard', [
            'shieldRoutePrefix' => $shieldRoutePrefix,
            // Add any other data you want to pass to the view
        ]);

        
    }

    public function show()
    {
        // Retrieve the shield route prefix from the configuration
        $shieldRoutePrefix = config('app.shield_route_prefix');

        // Return the view for the dashboard
        return view('Shield.utils.profile', [
            'shieldRoutePrefix' => $shieldRoutePrefix,
            // Add any other data you want to pass to the view
        ]);

        
    }


    public function updateProfile(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $request->user()->id,
        ]);

        $user = $request->user();
        $user->name = $request->name;
        $user->email = $request->email;
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