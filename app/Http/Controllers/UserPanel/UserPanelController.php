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
    
    return view('frontend.home',);
}

    

    public function contact()
    {

        return view('frontend.layouts.UI.contact');
    }

    public function donate()
    {

        return view('frontend.layouts.UI.donate');
    }
}
