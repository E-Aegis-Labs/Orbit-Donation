<?php

namespace App\Http\Controllers\Shield;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use Mckenziearts\Notify\LaravelNotify;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sliders = Slider::all();
        return view('shield.slider.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('shield.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     */
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

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $slider = Slider::findOrFail($id);
        return view('Shield.slider.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'heading' => 'required',
            'content' => 'required',
        ]);
    
        $slider = Slider::findOrFail($id);
    
        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
    
            $imagePath = public_path('uploads/'.$slider->image);
    
            // Check if the file exists before trying to delete it
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
    
            $final_name = time().'.'.$request->image->extension();
            $request->image->move(public_path('uploads'), $final_name);
            $slider->image = $final_name;
        }
    
        $slider->heading = $request->heading;
        $slider->content = $request->content;
        $slider->button_text = $request->button_text;
        $slider->button_link = $request->button_link;
        $slider->save(); // use save() instead of update()
    
        smilify('success', 'Slider updated successfully');
        return redirect()->back();
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $slider = Slider::findOrFail($id);
        unlink(public_path('uploads/'.$slider->image));
        $slider->delete();
    
        smilify('success', 'Slider deleted successfully');
        return redirect()->back();
    }
}
