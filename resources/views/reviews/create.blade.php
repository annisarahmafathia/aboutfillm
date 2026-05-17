@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <h2 class="mb-4">📝 Tulis Review Film</h2>

        @if(!isset($movie))
        {{-- Step 1: Search Film --}}
        <div style="background:#16213e; padding:25px; border-radius:10px;">
            <label class="form-label fs-5">🔍 Cari Film</label>
            <input type="text" id="searchFilm" class="form-control bg-dark text-white border-secondary mb-3" placeholder="Ketik judul film yang mau kamu review...">
            
            <div id="searchResults"></div>
        </div>

        <script>
            const movies = @json($movies);

            document.getElementById('searchFilm').addEventListener('input', function() {
                const keyword = this.value.toLowerCase().trim();
                const resultsDiv = document.getElementById('searchResults');

                if (keyword === '') {
                    resultsDiv.innerHTML = '';
                    return;
                }

                const filtered = movies.filter(m => m.title.toLowerCase().includes(keyword));

                if (filtered.length === 0) {
                    resultsDiv.innerHTML = `
                        <div class="text-center py-4" style="color:#aaa;">
                            <p class="fs-5">😔 Film "<strong style="color:white;">${this.value}</strong>" tidak ditemukan</p>
                            <small>Coba cari dengan judul lain</small>
                        </div>`;
                    return;
                }

                resultsDiv.innerHTML = filtered.map(m => `
                    <a href="/reviews/create?movie_id=${m.id}" class="text-decoration-none">
                        <div class="d-flex align-items-center gap-3 p-3 mb-2" 
                             style="background:#0f3460; border-radius:8px; cursor:pointer; transition:background 0.2s;"
                             onmouseover="this.style.background='#e94560'" 
                             onmouseout="this.style.background='#0f3460'">
                            <img src="${m.poster}" style="width:50px; height:70px; object-fit:cover; border-radius:4px;"
                                 onerror="this.src='https://via.placeholder.com/50x70?text=?'">
                            <div>
                                <div style="color:white; font-weight:bold;">${m.title}</div>
                                <small style="color:#aaa;">${m.year} • ${m.genre}</small>
                            </div>
                        </div>
                    </a>
                `).join('');
            });
        </script>

        @else
        {{-- Step 2: Form Review --}}
        <div class="d-flex align-items-center gap-3 mb-4" style="background:#16213e; padding:15px; border-radius:10px;">
            <img src="{{ $movie->poster }}" style="width:60px; height:85px; object-fit:cover; border-radius:6px;"
                 onerror="this.src='https://via.placeholder.com/60x85?text=?'">
            <div>
                <h5 class="mb-0">{{ $movie->title }}</h5>
                <small class="text-muted">{{ $movie->year }} • {{ $movie->genre }}</small>
            </div>
        </div>

        <form action="{{ route('reviews.store') }}" method="POST" style="background:#16213e; padding:25px; border-radius:10px;">
            @csrf
            <input type="hidden" name="movie_id" value="{{ $movie->id }}">
            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control bg-dark text-white border-secondary" placeholder="Nama kamu..." required>
            </div>
            <div class="mb-3">
                <label class="form-label">Rating (1-10)</label>
                <input type="number" name="rating" class="form-control bg-dark text-white border-secondary" min="1" max="10" step="0.1" placeholder="8.5" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Review</label>
                <textarea name="komentar" class="form-control bg-dark text-white border-secondary" rows="4" placeholder="Tulis reviewmu di sini..." required></textarea>
            </div>
            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-danger">Kirim Review</button>
                <a href="{{ route('reviews.create') }}" class="btn btn-outline-light">← Ganti Film</a>
            </div>
        </form>
        @endif
    </div>
</div>
@endsection