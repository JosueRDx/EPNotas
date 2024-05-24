<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;

class NoteController extends Controller
{
    public function index()
    {
        $notes = Note::all();
        return view('notes.index', compact('notes'));
    }

    public function create()
    {
        return view('notes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'curso' => 'required|string|max:255',
            'nota' => 'required|string',
        ]);

        Note::create([
            'Curso' => $request->curso,
            'Notas' => $request->nota,
        ]);

        return redirect()->route('notes.index')->with('success', 'Nota agregada correctamente.');
    }
}
