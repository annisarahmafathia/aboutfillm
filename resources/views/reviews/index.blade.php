@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>💬 Semua Review</h2>
    <a href="{{ route('reviews.create') }}" class="btn btn-danger">📝 Tulis Review</a>
</div>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

@forelse($reviews as $review)
<div style="background:#16213e; padding:20px; border-radius:10px; margin-bottom:15px;">
    <div class="d-flex justify-content-between align-items-start">
        <div>
            <h5 class="mb-1">{{ $review->movie->title }}</h5>
            <strong>{{ $review->nama }}</strong>
            <span class="rating ms-2">★ {{ $review->rating }} / 10</span>
        </div>
        <div>
            <a href="{{ route('reviews.edit', $review->id) }}" class="btn btn-sm btn-outline-light me-1">✏️ Edit</a>
            <form action="{{ route('reviews.destroy', $review->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Hapus review ini?')">🗑️ Hapus</button>
            </form>
        </div>
    </div>
    <p class="mt-2 mb-1">{{ $review->komentar }}</p>
    <small class="text-muted">{{ $review->created_at->diffForHumans() }}</small>
</div>
@empty
<p class="text-muted">Belum ada review. <a href="{{ route('reviews.create') }}">Tulis yang pertama!</a></p>
@endforelse
@endsection