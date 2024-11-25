<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotesController extends Controller
{
    public function store(Request $request)
{
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'author' => 'required|string|max:255',
        'datetime' => 'required|date',
        'body' => 'required|string',
        'classification' => 'required|in:personal,work,school,others',
    ]);

    $note = Note::create($validated);

    return response()->json($note, 201);
}

}
