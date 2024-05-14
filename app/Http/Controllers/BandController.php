<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Band;

class BandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bands = Band::all();
        return view("bands.bands", compact("bands"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("bands.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'genre'=> 'required|string|max:255',
        ]);

        $band = new Band();

        $band->name = $validatedData['name'];
        $band->genre = $validatedData['genre'];

        $band->save();

        return redirect()->route('bands.index')->with('success','Band created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $band = Band::findOrFail($id);
        return view('bands.show', compact('band'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $band = Band::findOrFail($id);
        return view('bands.edit', compact('band'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'genre' => 'required|string|max:255',
        ]);

        $band = Band::findOrFail($id);

        $band->name = $validatedData['name'];
        $band->genre = $validatedData['genre'];

        $band->save();

        return redirect()->route('bands.index')->with('success', 'Band updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $band = Band::findOrFail($id);
        $band->delete();
        return redirect()->route('bands.index')->with('success', 'Band deleted successfully.');
    }
}
