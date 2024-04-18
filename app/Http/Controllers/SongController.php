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
    public function show(string $id )
    {
        $song = Song::find($id); 
        return view('show', compact('song'))->with('id',$id);
    }

    public function edit(string $id)
    {
        $song = Song::find($id);   
       return view('edit', compact('song'))->with('id',$id);
    }
    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'singer' => 'required|string|max:255',
        ]);
    
        // Maak een nieuwe song aan
        $song = new Song();
        $song->title = $validatedData['title'];
        $song->singer = $validatedData['singer'];
        $song->save();
    
        // Redirect naar de index pagina
        return redirect()->route('songs')->with('success', 'Song created successfully!');
    }

    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
        ]);
    
        $song = Song::findOrFail($id);
        $song->title = $validatedData['title'];
    
        $song->save();
    
        return redirect()->route('songs', ['index' => $id])->with('success', 'Song bijgewerkt!');
    }

    public function destroy(string $id)
    {
    $song = Song::find($id);

    if ($song) {
        $song->delete();
        return redirect()->route('songs')->with('success', 'Song deleted successfully.');
    } else {
        return redirect()->route('songs')->with('error', 'Song not found.');
    }
    }
}
