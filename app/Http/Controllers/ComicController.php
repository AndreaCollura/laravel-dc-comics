<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Comic;

use App\Http\Requests\StoreComicRequest;
use App\Http\Requests\UpdateComicRequest;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {

        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     *
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     */
    public function store(StoreComicRequest $request)
    {


        $form_data = $request->validated();
        // $newComic = new Comic();
        // $newComic->fill($form_data);
        // $newComic->save();
        $newComic = Comic::create($form_data);
        return redirect()->route('comics.show', $newComic->id)->with('message', "Comic {$newComic->id} successfully created");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     *
     */
    public function update(UpdateComicRequest $request, Comic $comic)
    {
        $form_data = $request->validated();
        $comic->update($form_data);
        return redirect()->route('comics.show' , $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index')->with('message', "Comic with id: {$comic->id} Comic Successfully Deleted !");
    }




}
