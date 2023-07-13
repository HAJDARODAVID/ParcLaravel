<?php

namespace App\Http\Controllers;

use App\Models\MovieModel;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movies = MovieModel::all();

        return view('movies', $movies);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(MovieModel $movieModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MovieModel $movieModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MovieModel $movieModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MovieModel $movieModel)
    {
        //
    }
}
