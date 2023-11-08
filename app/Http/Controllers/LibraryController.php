<?php

namespace App\Http\Controllers;

use App\Models\Library;
use Illuminate\Http\Request;

class LibraryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $libraries = Library::all();

        return view('libraries.index', compact('libraries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('libraries.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Library::create([
            'title' => $request->title,
            'author' => $request->author,
            'year' => $request->year,
            'genre' => $request->genre
        ]);

        return redirect()->route('libraries.index')->with(['success' => 'Titolo correttamente aggiunto al database della biblioteca']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Library $library)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Library $library)
    {
        return view('libraries.edit', compact('library'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Library $library)
    {
        $library->title = $request->title;
        $library->author = $request->author;
        $library->year = $request->year;
        $library->genre = $request->genre;

        $library->save();

        return redirect()->route('libraries.edit', $library)->with(['success' => 'Titolo modificato correttamente.']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Library $library)
    {
        $library->delete();

        return redirect()->route('libraries.index')->with(['success' => 'Titolo eliminato.']);
    }
}
