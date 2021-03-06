<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Movie;
use Illuminate\Http\Request;

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
        return response()->json([
            'status' => 'success',
            'statuscode' => 200,
            'data' => $movies
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $movie = new Movie();
        $movie->judul = $request->judul;
        $movie->durasi = $request->durasi;
        $movie->tanggal_rilis = $request->tanggal_rilis;
        $movie->genre = $request->genre;
        $movie->aktor = $request->aktor;
        $movie->save();
        return response()->json([
            'status' => 'success',
            'statuscode' => 200,
            'data' => 'Film berhasil ditambahkan'
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movie = Movie::find($id);
        return response()->json([
            'status' => 'success',
            'statuscode' => 200,
            'data' => $movie
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $movie = Movie::find($id);
        $movie->judul = $request->judul;
        $movie->durasi = $request->durasi;
        $movie->tanggal_rilis = $request->tanggal_rilis;
        $movie->genre = $request->genre;
        $movie->aktor = $request->aktor;
        $movie->save();
        return response()->json([
            'status' => 'success',
            'statuscode' => 200,
            'data' => 'Film berhasil diubah'
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $movie = Movie::find($id);
        $movie->delete();
        return response()->json([
            'status' => 'success',
            'statuscode' => 200,
            'data' => 'Film berhasil dihapus'
        ], 200);
    }
}
