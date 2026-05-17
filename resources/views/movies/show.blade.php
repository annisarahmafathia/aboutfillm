@extends('layouts.app')

@section('content')
<div class="row mb-5">
    <div class="col-md-4">
        <img src="{{ $movie->poster }}" class="img-fluid rounded"
             onerror="this.src='https://via.placeholder.com/300x450?text=No+Poster'">
    </div>
    <div class="col-md-8">
        <h2>{{ $movie->title }}</h2>
        <p class="text-muted">{{ $movie->year }} • Directed by {{ $movie->director }}</p>
        <span class="badge badge-genre fs-6">{{ $movie->genre }}</span>
        <p class="rating fs-4 mt-2">★ {{ $movie->rating }} / 10</p>
        <hr style="border-color:#444">
        <p>{{ $movie->description }}</p>
        <div class="d-flex gap-2">
            <a href="/" class="btn btn-outline-light">← Back to Movies</a>
            <a href="{{ route('reviews.create') }}" class="btn btn-danger">📝 Tulis Review</a>
        </div>
    </div>
</div>

{{-- Daftar Review --}}
<div>
    <h4 class="mb-3">💬 Review ({{ count($reviews) }})</h4>
    @forelse($reviews as $review)
    <div style="background:#16213e; padding:15px; border-radius:10px; margin-bottom:15px;">
        <div class="d-flex justify-content-between">
            <strong>{{ $review->nama }}</strong>
            <span class="rating">★ {{ $review->rating }} / 10</span>
        </div>
        <p class="mt-2 mb-0">{{ $review->komentar }}</p>
        <small class="text-muted">{{ $review->created_at->diffForHumans() }}</small>
    </div>
    @empty
    <p class="text-muted">Belum ada review. <a href="{{ route('reviews.create') }}">Jadilah yang pertama!</a></p>
    @endforelse
</div>
@endsection