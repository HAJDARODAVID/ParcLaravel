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
        $data['movies']= MovieModel::all();
    
        return view('movies', $data);
        //return $data;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        if(!empty($request->input('name'))  && !empty($request->input('genre'))){
            $movie = new MovieModel();
            $movie->name       = $request->input('name');
            $movie->genre      = $request->input('genre');
            $movie->save();
            return 'New movie saved';
        }

        return 'Please enter the following data: name, genre';

      
    }

    /**
     * Display the specified resource.
     */
    public function show($movie)
    {   
        return MovieModel::find($movie);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $movie)
    {   
        $movie = MovieModel::find($movie);

        if(!$request->input('name')==NULL  || !$request->input('genre')==NULL){
            if(!empty($request->input('name'))){
                $movie->name       = $request->input('name');
                $movie->save();
            }
            if(!empty($request->input('genre'))){
                $movie->genre       = $request->input('genre');
                $movie->save();
            }
            return 'Movie with id: '. $movie->id . ' updated'; 
        }

        return 'Please enter the following data: name or genre';

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($movie)
    {   
        $movieToDestroy = MovieModel::find($movie);
        $movieToDestroy->delete();

    }
}
