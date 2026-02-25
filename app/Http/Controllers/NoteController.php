<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function index()
    {
        // $notes = Note::all();
        $notes = Note::latest()->paginate(10);

        return view('pages.note.index', compact('notes'));
    }

    //----------------------------------------------------------------------------------
    public function create()
    {
        return view('pages.note.create');
    }
    // Funcion de Create de Note
    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'title' => 'required|string|min:3|max:255',
                'description' => 'required|string|min:3|max:500',
            ],
            [
                // TITLE
                'title.required' => 'El título es obligatorio.',
                'title.string' => 'El título debe ser texto válido.',
                'title.min' => 'El título debe tener mínimo 3 caracteres.',
                'title.max' => 'El título no puede superar los 255 caracteres.',

                // DESCRIPTION
                'description.required' => 'La descripción es obligatoria.',
                'description.string' => 'La descripción debe ser texto válido.',
                'description.min' => 'La descripción debe tener mínimo 3 caracteres.',
                'description.max' => 'La descripción no puede superar los 500 caracteres.',
            ]
        );
        Note::create($validated);
        // Solo si se respetan los nombres de los campos es decir title y description 
        return redirect()->route('page.note.index')->with('success', 'Note creada correctamente.');
    }
    //----------------------------------------------------------------------------------

    // Funcion de Show de Note
    public function show(Note $note)
    {
        return view('pages.note.show', compact('note'));
    }
    //----------------------------------------------------------------------------------

    // Funcion de Edit de Note
    public function edit(Note $note)
    {
        return view('pages.note.edit', compact('note'));
    }

    // Funcion de Update de Note
    public function update(Request $request, Note $note)
    {
        $note->update($request->all());
        return redirect()->route('page.note.index');
    }

    // Funcion de Delete de Note
    public function destroy(Note $note)
    {
        $note->delete();
        return redirect()->route('page.note.index');
    }
}
