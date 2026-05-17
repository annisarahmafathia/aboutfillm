<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Review;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return view('movies.index', compact('movies'));
    }

    public function show($id)
    {
        $movie = Movie::findOrFail($id);
        $reviews = Review::where('movie_id', $id)->latest()->get();
        return view('movies.show', compact('movie', 'reviews'));
    }

    public function storeReview(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'rating' => 'required|numeric|min:1|max:10',
            'komentar' => 'required',
        ]);

        Review::create([
            'movie_id' => $id,
            'nama' => $request->nama,
            'rating' => $request->rating,
            'komentar' => $request->komentar,
        ]);

        return redirect()->route('movies.show', $id)->with('success', 'Review berhasil ditambahkan!');
    }
}