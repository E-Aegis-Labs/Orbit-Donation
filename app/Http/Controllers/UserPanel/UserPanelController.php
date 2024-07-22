<?php

namespace App\Http\Controllers\UserPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserPanelController extends Controller
{

    // public function dashboard(){
    //     if(Auth::user()->role === 'admin'){
    //         return redirect()->route('Shield.dashboard');
    //     }
    //     elseif(Auth::user()->role === 'volunteer'){
    //         return redirect()->route('Volunteer.dashboard');
    //     }
    //     return view("Volunteer.dashboard");
    // }

    public function index()
    {
        return view("frontend.home");
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
