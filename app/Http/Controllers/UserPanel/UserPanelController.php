<?php

namespace App\Http\Controllers\UserPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserPanelController extends Controller
{
    public function index(Request $request)
    {
        // $ip = $request->ip();
        // $location = (new Location())->get($ip);

        return view('view.home',);
    }

    public function show()
    {
        // Retrieve the shield route prefix from the configuration
        $UserRoutePrefix = config('app.user_route_prefix');
    
        // Retrieve the user data for the dashboard
        $user = User::select('name', 'email', 'created_at')->first();
    
        // Return the view for the dashboard with the data
        return view('View.User.dashboard', [
            'userRoutePrefix' => $UserRoutePrefix,
            'user' => $user,
        ]);
    }
    

    // profile update 
    // public function profile_submit(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required',
    //         'email' => 'required|email',
    //     ]);

    //     $user_data = User::find(Auth::guard('web')->user()->id);

    //     if ($request->photo != null) {
    //         $request->validate([
    //             'photo' => 'image|mimes:jpg,jpeg,png',
    //         ]);

    //         if (Auth::guard('web')->user()->photo != null) {
    //             unlink(public_path('uploads/' . Auth::guard('web')->user()->photo));
    //         }

    //         $final_name = time() . '.' . $request->photo->extension();
    //         $request->photo->move(public_path('uploads'), $final_name);
    //         $user_data->photo = $final_name;
    //     }

    //     if ($request->password != '' || $request->password_confirmation != '') {
    //         $request->validate([
    //             'password' => 'required',
    //             'password_confirmation' => 'required|same:password',
    //         ]);
    //         $user_data->password = Hash::make($request->password);
    //     }

    //     $user_data->name = $request->name;
    //     $user_data->email = $request->email;
    //     $user_data->update();

    //     return redirect()->back()->with('success', 'Profile updated successfully');
    // }


    public function contact()
    {

        return view('view.layouts.UI.contact');
    }

    public function donate()
    {
        return view('view.layouts.UI.donate');
    }


}
