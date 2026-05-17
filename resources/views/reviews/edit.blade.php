@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <h2 class="mb-4">✏️ Edit Review</h2>

        <form action="{{ route('reviews.update', $review->id) }}" method="POST" style="background:#16213e; padding:25px; border-radius:10px;">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Film</label>
                <input type="text" class="form-control bg-dark text-white border-secondary" value="{{ $review->movie->title }}" disabled>
            </div>
            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control bg-dark text-white border-secondary" value="{{ $review->nama }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Rating (1-10)</label>
                <input type="number" name="rating" class="form-control bg-dark text-white border-secondary" min="1" max="10" step="0.1" value="{{ $review->rating }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Review</label>
                <textarea name="komentar" class="form-control bg-dark text-white border-secondary" rows="4" required>{{ $review->komentar }}</textarea>
            </div>
            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-danger">Update Review</button>
                <a href="{{ route('reviews.index') }}" class="btn btn-outline-light">Batal</a>
            </div>
        </form>
    </div>
</div>
@endsection