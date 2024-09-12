<?php

namespace App\Http\Controllers\UserPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Slider;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $slider = Slider::get();
        return view('view.home', compact('slider'));
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        // Retrieve the user route prefix from the configuration
        $userRoutePrefix = config('app.user_route_prefix');
    
        // Get the authenticated user
        $user = Auth::user();
    
        // Return the view for the dashboard with the user data
        return view('View.User.dashboard', [
            'userRoutePrefix' => $userRoutePrefix,
            'user' => $user,
        ]);
    }

    public function contact()
    {
        return view('view.layouts.UI.contact');
    }

    public function donate()
    {
        return view('view.layouts.UI.donate');
    }
}
