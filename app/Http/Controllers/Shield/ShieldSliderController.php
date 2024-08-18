<?php

namespace App\Http\Controllers\Shield;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use Mckenziearts\Notify\LaravelNotify;

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


    public function store(Request $request)
    {
        $request->validate([
            'heading' => 'required',
            'content' => 'required',  
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'button_text' => 'required',
            'button_link' => 'required',
        ]);
    
        $slider = new Slider();
        $slider->heading = $request->heading;
        $slider->content = $request->content;  
        $final_name = time() . '.' . $request->image->extension();
        $request->image->move(public_path('uploads'), $final_name);
        $slider->image = $final_name;
        $slider->button_text = $request->button_text;
        $slider->button_link = $request->button_link;
        $slider->save();
    
        smilify('success', 'Slider created successfully.');
        return redirect()->route('Shield.slider.index');
        
    }
    
}
