<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // Retrieve the shield route prefix from the configuration
        $UserRoutePrefix = config('app.user_route_prefix');

        // You can add any necessary logic here
        // For example, retrieving data for the dashboard

        // Return the view for the dashboard
        return view('User.dashboard', [
            'userRoutePrefix' => $UserRoutePrefix,
            // Add any other data you want to pass to the view
        ]);

        
    }
}
