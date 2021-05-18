<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::all();
        return view('movies.index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('movies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $year = date("Y") + 1 ;
        //Validation
        $request->validate([
            'title' => 'required|string|max:100',
            'director' => 'required|string|max:50',
            'genre' => 'required|string|max:50',
            'description' => 'required|string',
            'year' => 'required|numeric|min:1900|max:' .$year,
            ]);
        $movieNew = Movie::create($request->all());
        // $data = $request->all();
        // //Save
        // $movieNew = new Movie;
        // $movieNew->title = $data['title'];
        // $movieNew->director = $data['director'];
        // $movieNew->genre = $data['genre'];
        // $movieNew->description = $data['description'];
        // $movieNew->year = $data['year'];
        // $movieNew->img = $data['img'];
        //Store
        // $movieNew->save();
        //Redirect
        return redirect()->route('movies.show', $movieNew);
    }

    /**
     * Display the specified resource.
     *
     * @param  Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        return view('movies.show', compact('movie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        return view('movies.edit', ['movie' => $movie]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {
        $year = date("Y") + 1 ;
        //Validation
        $request->validate([
            'title' => 'required|string|max:100',
            'director' => 'required|string|max:50',
            'genre' => 'required|string|max:50',
            'description' => 'required|string',
            'year' => 'required|numeric|min:1900|max:' .$year,
            ]);
        $data = $request->all();

        $movie->update($data);

        return redirect()->route('movies.show', $movie);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        $movie->delete();

        return redirect()->route('movies.index')->with('message', 'Il Film è stato eliminato');
    }
}


