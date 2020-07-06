<?php

namespace App\Http\Controllers;

use App\Note;

use Illuminate\Http\Request;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notes = Note::latest()->get();

        return view('notes', [
            'notes' => $notes
        ]);
    } 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('notes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'title' => 'required'
        ]);

        Note::create([
            'title' => request('title'),
            'body'  => request('body')
        ]);

        return redirect('/');
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function edit(Note $note)
    {
        return view('notes.edit', [
            'note'  => $note
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Note $note)
    {   
        // Validate the request data
        request()->validate([
            'title' => 'required'
        ]);
        // Find the note to update
        $noteOld = Note::find($note->id);

        // Replace the relevant fields
        $noteOld->title = $request->title;
        $noteOld->body = $request->body;
        
        // Persist back to the database
        $noteOld->save();

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function destroy(Note $note)
    {
        // Destroy the given note by the ID
        Note::destroy($note->id);

        return redirect('/');
    }
}
