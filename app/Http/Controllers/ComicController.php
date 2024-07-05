<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comicsList = Comic::all();

        $data = [
            "catalogo" => $comicsList
        ];

        return view("Comics.index", $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("Comics.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $newComic = new Comic();
        $newComic->titolo = $data["titolo"];
        $newComic->cover_image = $data["cover_image"];
        $newComic->autore = $data["autore"];
        $newComic->casa_editrice = $data["casa_editrice"];
        $newComic->prezzo = $data["prezzo"];
        $newComic->anno = $data["anno"];
        $newComic->voto = $data["voto"];
        $newComic->descrizione = $data["descrizione"];
        $newComic->save();

        return redirect()->route("comics.show", $newComic->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $fumetto = Comic::find($id);
        $data = [
            "Comic" => $fumetto
        ];
        return view("comics.show", $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
