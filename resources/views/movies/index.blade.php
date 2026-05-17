@extends('layouts.app')

@section('content')
<h2 class="mb-4">🍿 Film Collection</h2>

<div class="row row-cols-2 row-cols-md-4 g-4">
    @foreach($movies as $movie)
    <div class="col">
        <a href="{{ route('movies.show', $movie->id) }}" class="text-decoration-none">
            <div class="card h-100">
                <img src="{{ $movie->poster }}" class="card-img-top" style="height:300px; object-fit:cover;"
                     onerror="this.src='https://via.placeholder.com/300x450?text=No+Poster'">
                <div class="card-body">
                    <h6 class="card-title mb-1" style="color:#ffffff;">{{ $movie->title }}</h6>
                    <small style="color:#aaaaaa;">{{ $movie->year }}</small><br>
                    <span class="rating">★ {{ $movie->rating }}</span>
                    <span class="badge badge-genre ms-2">{{ $movie->genre }}</span>
                </div>
            </div>
        </a>
    </div>
    @endforeach
</div>
@endsection