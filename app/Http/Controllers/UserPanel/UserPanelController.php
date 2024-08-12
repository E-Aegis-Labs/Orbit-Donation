<?php

namespace App\Http\Controllers\UserPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;

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

        // You can add any necessary logic here
        // For example, retrieving data for the dashboard

        // Return the view for the dashboard
        return view('View.User.dashboard', [
            'userRoutePrefix' => $UserRoutePrefix,
            // Add any other data you want to pass to the view
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
