<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class CatalogController extends Controller
{

    public function getIndex()
    {
        $peliculas = Movie::all(); // Obtener todas las películas desde la base de datos
        return view('catalog.index', compact('peliculas')); // Pasar las películas a la vista
    }
    public function getShow($id)
    {
        $pelicula = Movie::findOrFail($id); // Obtener la película por ID
        return view('catalog.show', compact('pelicula')); // Pasar la película a la vista
    }
    public function getCreate()
    {
        return view('catalog.create');
    }
    public function getEdit($id)
    {
        $pelicula = Movie::findOrFail($id); // Obtener la película por ID
        return view('catalog.edit', compact('pelicula')); // Pasar la película a la vista
    }



    // Otros métodos...




    public function postCreate(Request $request)
    {
        $movie = new Movie();
        $movie->title = $request->input('title');
        $movie->year = $request->input('year');
        $movie->director = $request->input('director');
        $movie->poster = $request->input('poster');
        $movie->synopsis = $request->input('synopsis');
        $movie->rented = false; // Por defecto, no está alquilada

        $movie->save();

        return redirect('/catalog');
    }

    public function putEdit($id, Request $request)
    {
        $movie = Movie::findOrFail($id);
        $movie->title = $request->input('title');
        $movie->year = $request->input('year');
        $movie->director = $request->input('director');
        $movie->poster = $request->input('poster');
        $movie->synopsis = $request->input('synopsis');

        $movie->save();

        return redirect('/catalog/show/' . $id);
    }
}
