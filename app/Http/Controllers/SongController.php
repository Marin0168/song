<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;
class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $songs = Song::all();
        return view('songs', compact('songs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("create");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $song = Song::find($id); // Haal de song op basis van het meegegeven id op uit de database
        return view('show', compact('song'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $songs = ['Living on a prayer', 'Nothing else matters', 'Thunderstruck', 'Back in black', 'Ace of spades'];
        $song = isset($songs[$id]) ? $songs[$id] : null;
        return view('edit', compact('song'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //verwerkt formulieren dus om iets bijvoorbeeld toe te voegen
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //doet iets update is dus nodig bij edit
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //doet iets verwijderen
    }
}
