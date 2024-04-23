<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;
class SongController extends Controller
{
    public function index()
    {
        // Zoek de song
        $songs = Song::all();

        // Stuur naar de songs pagina en geef song mee
        return view('songs', compact('songs'));
    }

    public function create()
    {
        // stuur naar de create pagina
        return view("create");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id )
    {
        // zoek de song
        $song = Song::find($id); 

        // stuur naar de pagina en stuur de song en id mee
        return view('show', compact('song'))->with('id',$id);
    }

    public function edit(string $id)
    {
        // zoek de song
        $song = Song::find($id);
        
        // Stuur naar de edit pagina geef de song en id mee
        return view('edit', compact('song'))->with('id',$id);
    }
    
    public function store(Request $request)
    {
        // vallideer de songdata
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'singer' => 'required|string|max:255',
        ]);
    
        // Maak een nieuwe song aan
        $song = new Song();

        // Veranderd de data van de song naar de ingegeven data
        $song->title = $validatedData['title'];
        $song->singer = $validatedData['singer'];

        // sla de song op
        $song->save();
    
        // stuur terug naar homepage
        return redirect()->route('songs')->with('success', 'Song created successfully!');
    }

    public function update(Request $request, string $id)
    {
        // vallideer de data
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'singer' => 'required|string|max:255',

        ]);
        // zoek de song
        $song = Song::find($id);
        $song->title = $validatedData['title'];
        $song->singer = $validatedData['singer'];

        // sla de song op
        $song->save();
    
        // stuur terug naar homepage
        return redirect()->route('songs', ['index' => $id])->with('success', 'Song bijgewerkt!');
    }

    public function destroy(string $id)
    {
        // zoek de song
        $song = Song::find($id);

        // verwijder de song
        $song->delete();

        // stuur terug naar homepage
        return redirect()->route('songs')->with('success', 'Song deleted successfully.');
    }
}