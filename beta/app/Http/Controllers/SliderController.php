<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSliderRequest;
use App\Http\Requests\UpdateSliderRequest;
use App\Models\Slider;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sliders = Slider::all();
        return view('intranet.sliders.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('intranet.sliders.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSliderRequest $request)
    {
        $request->validate([
            'imagen' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048'
        ]);
        if ($request->hasFile('imagen')) {
            $image_path = $request->file('imagen')->store('imagen', 'public');
        }
        Slider::create([
            'imagen' => $image_path
        ]);
        return redirect()->route('intranet.sliders.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Slider $slider)
    {
        return view('intranet.sliders.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSliderRequest $request, Slider $slider)
    {
        $request->validate([
            'imagen' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048'
        ]);
        if ($request->hasFile('imagen')) {
            $image_path = $request->file('imagen')->store('imagen', 'public');
            $slider->update([
                'imagen' => $image_path
            ]);
        }
        return redirect()->route('intranet.sliders.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Slider $slider)
    {
        $slider->delete();
        return redirect()->route('intranet.sliders.index');
    }
}
