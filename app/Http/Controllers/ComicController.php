<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;
class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comic = Comic::all();
        return view('comics.index', compact('comic'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() // ci ritorna il form vuoto
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) // salva tutti i dati inseriti all'interno del form 
    {
        $data = $request->all();

        $request->validate([
            'title' => 'required|unique:comics|max:50',
            'series' => 'required|max:100',
            'type' => 'required|max:30',
            'price' => 'required|integer|min:0',
            // 'sale_date' => ['date_format:m/g/Y']
           
        ]);

        $new_comics = new Comic();
        $new_comics->fill($data);
        $new_comics->save();

        return redirect()->route('comics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        // dd($comic);
        return view('comics.show', compact('comic'));

        // altro metodo: inserire parametro id nella show e utilizzare il seguente cod
        // $dettaglio_comic = Comic::find($id);
        // echo $dettaglio_comic['description'];
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // PARTE UPDATE
    public function edit($id) // ci ritorna il form compilato
    {
        $comic = Comic::findOrFail($id);
        // il findOrFail ci fa l'if automaticamente
        // if($comic) {
        //     return view('comics.edit', compact('comic'));
        // }
        // abort(404);
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic) // inserisce tutti i file all interno del database
    {
        $data = $request->all();
        $comic->update($data);
        return redirect()->route('comics.show', $comic['id']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index');
    }
}
