<?php

namespace App\Http\Controllers\Shield;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;

class ShieldSliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        return view('shield.slider.index', compact('sliders'));
    }


    public function create()
    {
        return view('shield.slider.create');
    }
}
  