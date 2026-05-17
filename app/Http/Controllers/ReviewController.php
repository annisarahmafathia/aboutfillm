<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function create(Request $request)
    {
        $movies = Movie::all();
        $movie = null;
        if ($request->has('movie_id')) {
            $movie = Movie::find($request->movie_id);
        }
        return view('reviews.create', compact('movies', 'movie'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'movie_id' => 'required',
            'nama' => 'required',
            'rating' => 'required|numeric|min:1|max:10',
            'komentar' => 'required',
        ]);

        Review::create($request->all());

        return redirect()->route('reviews.index')->with('success', 'Review berhasil ditambahkan!');
    }

    public function index()
    {
        $reviews = Review::with('movie')->latest()->get();
        return view('reviews.index', compact('reviews'));
    }

    public function edit($id)
    {
        $review = Review::findOrFail($id);
        $movies = Movie::all();
        return view('reviews.edit', compact('review', 'movies'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'rating' => 'required|numeric|min:1|max:10',
            'komentar' => 'required',
        ]);

        $review = Review::findOrFail($id);
        $review->update($request->all());

        return redirect()->route('reviews.index')->with('success', 'Review berhasil diupdate!');
    }

    public function destroy($id)
    {
        Review::findOrFail($id)->delete();
        return redirect()->route('reviews.index')->with('success', 'Review berhasil dihapus!');
    }
}