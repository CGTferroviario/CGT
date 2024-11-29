<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

use App\Http\Requests\StoreSliderRequest;
use App\Http\Requests\UpdateSliderRequest;
use App\Models\Slider;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

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
            'imagen' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'descripcion' => 'nullable|string',
            'enlace' => 'required|url',
            'active' => 'boolean',
            'fecha' => 'nullable|date',
        ]);

        $imagen = $request->file('imagen');
        $filename = time() . '.' . $imagen->getClientOriginalExtension();

        $manager = new ImageManager(new Driver());
        $img = $manager->read($imagen->getRealPath());
        $img->cover(1920, 600);

        Storage::disk('public')->put('sliders/' . $filename, $img->toJpeg());

        // $img = Image::make($imagen->getRealPath());
        // $img->fit(1920, 600); // Ajusta la imagen al tamaño especificado

        // Storage::disk('public')->put('sliders/' . $filename, (string) $img->encode());

        Slider::create([
            'imagen' => 'sliders/' . $filename,
            'descripcion' => $request->descripcion,
            'enlace' => $request->enlace,
            'activo' => $request->has('activo'),
            'fecha' => $request->fecha,
        ]);

        return redirect()->route('intranet.sliders.index')->with('success', 'Slider creado exitosamente.');
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
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'descripcion' => 'nullable|string',
            'enlace' => 'required|url',            
            'activo' => 'boolean',
            'fecha' => 'nullable|date',
        ]);

        if ($request->hasFile('imagen')) {
            Storage::disk('public')->delete($slider->imagen);

            $imagen = $request->file('imagen');
            $filename = time() . '.' . $imagen->getClientOriginalExtension();

            $manager = new ImageManager(new Driver());
            $img = $manager->read($imagen->getRealPath());
            $img->cover(1920, 600);

            Storage::disk('public')->put('sliders/' . $filename, $img->toJpeg());

            // $img = Image::make($imagen->getRealPath());
            // $img->fit(1920, 600);

            // Storage::disk('public')->put('sliders/' . $filename, (string) $img->encode());

            $slider->imagen = 'sliders/' . $filename;
        }

        $slider->descripcion = $request->descripcion;
        $slider->enlace = $request->enlace;
        $slider->activo = $request->has('activo');
        $slider->fecha = $request->fecha;
        $slider->save();

        return redirect()->route('intranet.sliders.index')->with('success', 'Slider actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Slider $slider)
    {
        Storage::disk('public')->delete($slider->imagen);
        $slider->delete();

        return redirect()->route('intranet.sliders.index')->with('success', 'Slider eliminado exitosamente.');
    }
}
