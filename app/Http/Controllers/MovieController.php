<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;

class MovieController extends Controller
{
    protected $requestValidation = [];

    public function __construct()
    {
        $year = date("Y") + 1;

        $this->requestValidation = [
            'title' => 'required|string|max:100',
            'director' => 'required|string|max:50',
            'genre' => 'required|string|max:50',
            'description' => 'required|string',
            'year' => 'required|numeric|min:1900|max:'. $year
        ];
    }
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
        $data = $request->all();

        if ( $data['img'] === NULL ) {
            unset($data['img']);
        }
        //Validation
        $request->validate($this->requestValidation);
        $movieNew = Movie::create($data);

        return redirect()->route('movies.show', $movieNew)->with('message', $movieNew->title . 'è stato aggiunto con successo');
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
        $data = $request->all();

        if ( $data['img'] === NULL ) {
            unset($data['img']);
        }
        //Validation
        $request->validate($this->requestValidation);


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

        return redirect()->route('movies.index')->with('message', $movie->title .'è stato eliminato');
    }
}


