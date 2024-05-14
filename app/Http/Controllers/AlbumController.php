<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Haal alle albums op
        $albums = Album::all();

        // Retourneer de view met de albums
        return view('albums.albums', compact('albums'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Retourneer het formulier voor het maken van een nieuw album
        return view('albums.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Valideer de invoer
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            // Voeg hier andere validatieregels toe voor andere velden indien nodig
        ]);

        // Maak een nieuw album aan
        $album = new Album();

        // Vul de gevalideerde gegevens in het albummodel
        $album->title = $validatedData['title'];
        // Voeg hier andere velden toe indien nodig

        // Sla het album op
        $album->save();

        // Redirect naar de indexpagina met een succesmelding
        return redirect()->route('albums.albums')->with('success', 'Album created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Zoek het album op basis van de meegegeven id
        $album = Album::findOrFail($id);

        // Retourneer de view met het specifieke album
        return view('albums.show', compact('album'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Zoek het album op basis van de meegegeven id
        $album = Album::findOrFail($id);

        // Retourneer het formulier voor het bewerken van het album
        return view('albums.edit', compact('album'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Valideer de invoer
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            // Voeg hier andere validatieregels toe voor andere velden indien nodig
        ]);

        // Zoek het album op basis van de meegegeven id
        $album = Album::findOrFail($id);

        // Werk de gevalideerde gegevens bij in het albummodel
        $album->title = $validatedData['title'];
        // Voeg hier andere velden toe indien nodig

        // Sla de wijzigingen op
        $album->save();

        // Redirect naar de indexpagina met een succesmelding
        return redirect()->route('albums.albums')->with('success', 'Album updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Zoek het album op basis van de meegegeven id en verwijder het
        $album = Album::findOrFail($id);
        $album->delete();

        // Redirect naar de indexpagina met een succesmelding
        return redirect()->route('albums.index')->with('success', 'Album deleted successfully.');
    }
}
